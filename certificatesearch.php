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
    $query = "SELECT * FROM certificate WHERE first_name LIKE :search";
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
        body {
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
    <h1>Certificate Student</h1>
    <form id="searchform" method="GET">
        <input type="text" id="search-input" name="search" placeholder="Enter first name">
        <button type="submit">Search</button>
    </form>

    <?php if (isset($results) && !empty($results)) : ?>
        <div class="section2">
            <h2>Search Results:</h2>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const searchResults = <?php echo json_encode($results); ?>;
                const section2 = document.querySelector('.section2');

                searchResults.forEach(result => {
                    const resultItem = document.createElement('div');
                    resultItem.className = 'result-item';

                    const image = document.createElement('img');
                    image.src = result['image_path'];
                    image.alt = 'Student Image';
                    resultItem.appendChild(image);

                    const regNo = document.createElement('p');
                    regNo.innerHTML = `<strong>Registration No:</strong> ${result['reg_no']}`;
                    resultItem.appendChild(regNo);

                    const firstName = document.createElement('p');
                    firstName.innerHTML = `<strong>First Name:</strong> ${result['first_name']}`;
                    resultItem.appendChild(firstName);

                    const lastName = document.createElement('p');
                    lastName.innerHTML = `<strong>Last Name:</strong> ${result['last_name']}`;
                    resultItem.appendChild(lastName);

                    const level = document.createElement('p');
                    level.innerHTML = `<strong>Level:</strong> ${result['level']}`;
                    resultItem.appendChild(level);

                    const admissionStatus = document.createElement('p');
                    admissionStatus.innerHTML = `<strong>Admission Status:</strong> ${result['admission_status']}`;
                    resultItem.appendChild(admissionStatus);

                    section2.appendChild(resultItem);
                });
            });
        </script>
    <?php endif; ?>
</body>
</html>
