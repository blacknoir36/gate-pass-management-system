<?php
$host = 'localhost';
$database = 'gatepassmanagement';
$username = 'pass';
$password = '@pass36';

// Create a PDO instance
try {
    $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Retrieve records from the database, sorted by arrival time
$query = $db->query("SELECT * FROM visitors ORDER BY arrival_time ASC");
$records = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div style="background-color: #1C415D; padding: 20px; color: white;">
    <?php
    // Display the records
    foreach ($records as $record) {
        echo "<p><strong>Full Name:</strong> " . $record['name'] . "</p>";
        echo "<p><strong>Address:</strong> " . $record['address'] . "</p>";
        echo "<p><strong>Phone Number:</strong> " . $record['phone'] . "</p>";
        echo "<p><strong>Email Address:</strong> " . $record['email'] . "</p>";
        echo "<p><strong>Properties:</strong> " . $record['properties'] . "</p>";
        echo "<p><strong>Contact Person:</strong> " . $record['person'] . "</p>";
        echo "<p><strong>Purpose of Visit:</strong> " . $record['purpose'] . "</p>";
        echo "<p><strong>Entry time:</strong> " . $record['arrival_time'] . "</p>";
        echo "<hr>";
    }
    ?>
</div>
