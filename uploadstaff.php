 


<!DOCTYPE html>
<html>
<head>
    <title>Data Insertion</title>
    <style>
        body{
            
            background: #1C415D;
        }
        </style>
</head>
<body>
    <h1>Staff Data Insertion Form</h1>
    <form method="POST" action="insert_data2.php" enctype="multipart/form-data">
        <label for="table_name">Select Table:</label>
        <select name="table_name" id="table_name">
            <option value="staff">Staff Members</option>
            <option value="nonstaff">Non-staff Members</option>
           
        </select>
        <br><br>
        <label for="id_no">ID No:</label>
        <input type="text" name="id_no" id="id_no" required>
        <br><br>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br><br>
        <label for="department">Department:</label>
        <input type="text" name="department" id="department" required>
        <br><br>
        <label for="membership">Membership:</label>
        <input type="text" name="membership" id="membership" required>
        <br><br>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
