<?php
session_start();

function database_run($query,$vars = array())
{
	
    $string = "mysql:host=localhost;dbname=gatepassmanagement";
	$con = new PDO($string,'root','');

	if(!$con){
		return false;
	}

	$stm = $con->prepare($query);
	$check = $stm->execute($vars);

	if($check){
		
		$data = $stm->fetchAll(PDO::FETCH_OBJ);
		
		if(count($data) > 0){
			return $data;
		}
	}

	return false;
}

function login($data)
{
    $errors = array();
   
    if (count($errors) == 0) {
        $arr['email'] = $data['email'];
        $password = $data['password'];

        $query = "SELECT * FROM sign__up1 WHERE email = :email";
        $row = database_run($query, $arr);

        if (is_array($row) && count($row) > 0) {
            $row = $row[0];

            if ($password === $row->password) {
                $_SESSION['USER'] = $row;
                $_SESSION['LOGGED_IN'] = true;
            } else {
                $errors[] = "Wrong email or password";
            }
        } else {
            $errors[] = "Wrong email or password";
        }
    }
    return $errors;
}

function check_login($redirect = true)
{
    if (isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])) {
        return true;
    }

    if ($redirect) {
        header("Location: home_page1.php");
        die;
    } else {
        return false;
    }
}
?>
