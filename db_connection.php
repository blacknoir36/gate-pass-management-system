<?php
// Database configuration
$host = 'localhost';
$database = 'gatepassmanagement';
$username = 'pass'; 
$password = '@pass36'; 

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the character set for proper encoding
$conn->set_charset("utf8");
?>
