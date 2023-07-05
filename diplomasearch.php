<?php
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

// Fetch data based on search query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "SELECT * FROM diploma WHERE first_name LIKE :search";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Page</title>
    <style>
       body{
            text-align: center;
            background: #1C415D;
        }
        
        .result-item {
            padding: 10px;
            box-sizing: border-box;
        }

        .result-item img {
            width: 100%;
            max-width: 200px;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Diploma Student</h1>
    <form id="searchform" method="GET">
        <input type="text" id="searchform" name="search" placeholder="Enter first name">
        <button type="submit">Search</button>
    </form>

    <?php if (isset($results) && !empty($results)) : ?>
        <h2>Search Results:</h2>
        <div class="result-container">
            <?php foreach ($results as $row) : ?>
                <div class="result-item">
                    <img src="<?php echo $row['image_path']; ?>" alt="Student Image">
                    <p><strong>Registration No:</strong> <?php echo $row['reg_no']; ?></p>
                    <p><strong>First Name:</strong> <?php echo $row['first_name']; ?></p>
                    <p><strong>Last Name:</strong> <?php echo $row['last_name']; ?></p>
                    <p><strong>Level:</strong> <?php echo $row['level']; ?></p>
                    <p><strong>Admission Status:</strong> <?php echo $row['admission_status']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</body>
</html>
