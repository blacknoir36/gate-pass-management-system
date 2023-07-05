<?php
session_start();

function database_run($query, $vars = array())
{
    $string = "mysql:host=localhost;dbname=gatepassmanagement";
    $con = new PDO($string, 'root', '');

    if (!$con) {
        return false;
    }

    $stm = $con->prepare($query);
    $check = $stm->execute($vars);

    if ($check) {

        $data = $stm->fetchAll(PDO::FETCH_OBJ);

        if (count($data) > 0) {
            return $data;
        }
    }

    return false;
}

function collect($data)
{
    $errors = array();

    // Save
    if (count($errors) == 0) {
        $arr['name'] = $data['name'];
        $arr['address'] = $data['address'];
        $arr['phone'] = $data['phone'];
        $arr['email'] = $_POST['email'];
        $arr['properties'] = $data['properties'];
        $arr['person'] = $data['person'];
        $arr['purpose'] = $data['purpose'];
        $arr['arrival_time'] = $_POST['arrival_time'];
        $arr['departure_time'] = $_POST['departure_time'];

        // ...

        $query = "INSERT INTO visitors (name, address, phone, email, properties, person, purpose, arrival_time, departure_time) VALUES 
        (:name, :address, :phone, :email, :properties, :person, :purpose, :arrival_time, :departure_time)";

        database_run($query, $arr);

        // Redirect to another page
        header("Location: QRcode.php");
        die;
    }

    return $errors;
}
?>
