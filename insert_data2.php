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
    $id_no = $_POST['id_no'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $department = $_POST['department'];
    $membership = $_POST['membership'];

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
    $query = "INSERT INTO $table_name (id_no, first_name, last_name, department, membership, image_path) VALUES (:id_no, :first_name, :last_name, :department, :membership, :image_path)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id_no', $id_no);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':department', $department);
    $stmt->bindParam(':membership', $membership);
    $stmt->bindParam(':image_path', $image_path);
    $stmt->execute();
}
?>
