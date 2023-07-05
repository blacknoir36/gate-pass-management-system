<?php
// Retrieve the JSON data sent from the client
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

// Extract the form data
$name = $data['name'];
$address = $data['address'];
$phone = $data['phone'];
$email = $data['email'];
$properties = $data['properties'];
$person = $data['person'];
$purpose = $data['purpose'];
$arrivalTime = $data['arrivalTime'];


// Connect to your MySQL database (phpMyAdmin)
$servername = 'localhost'; // Change to your server name (e.g., 'localhost')
$dbname = 'gatepassmanagement'; // Change to your MySQL database name
$username = 'pass'; 
$password = '@pass36'; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Insert the form data into the database
$sql = "INSERT INTO visitors (name, address, phone, email, properties, person, purpose, arrival_time)
        VALUES ('$name', '$address', '$phone', '$email', '$properties', '$person', '$purpose', '$arrivalTime')";

if ($conn->query($sql) === TRUE) {
    echo 'Data saved successfully';
} else {
    echo 'Failed to save data: ' . $conn->error;
}

$conn->close();
?>
