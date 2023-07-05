<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection parameters
    $host = 'localhost';
    $database = 'gatepassmanagement';
    $username = 'pass'; 
    $password = '@pass36'; 
    
    // Create a PDO connection
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    } 

    // Retrieve form data
    $table_name = $_POST['table_name'];
    $reg_no = $_POST['reg_no'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $level = $_POST['level'];
    $admission_status = $_POST['admission_status'];

  // Handle file upload
    $image_path = '';
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $image_name = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_path = 'uploads/' . $image_name;
    move_uploaded_file($image_tmp_name, $image_path);
}


    if (!empty($image_path) && file_exists($image_path)) {
        echo '<img src="' . $image_path . '" alt="Uploaded Image">';
    }

    // Insert the data into the specified table
       // Insert the data into the specified table
       $query = "INSERT INTO $table_name (reg_no, first_name, last_name, level, admission_status, image_path) VALUES (:reg_no, :first_name, :last_name, :level, :admission_status, :image_path)";
       $stmt = $pdo->prepare($query);
       $stmt->bindParam(':reg_no', $reg_no);
       $stmt->bindParam(':first_name', $first_name);
       $stmt->bindParam(':last_name', $last_name);
       $stmt->bindParam(':level', $level);
       $stmt->bindParam(':admission_status', $admission_status);
       $stmt->bindParam(':image_path', $image_path);
       $stmt->execute();
   }
   
