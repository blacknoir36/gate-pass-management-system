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


function sign($data)
{
	$errors = array();
 


	
	//save
	if(count($errors) == 0){
		$arr['first_name'] = $data['first_name'];
		$arr['last_name'] = $data['last_name'];
		$arr['email'] = $_POST['email'];
		$arr['password'] = $data['password'];
		


		$query = "insert into sign__up1 (first_name,last_name,email,password) values 
		(:first_name,:last_name,:email,:password)";

		database_run($query,$arr);
	}
	return $errors;
}
?>