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
    <h1>Student Insertion Form</h1>
    <form method="POST" action="insert_data.php" enctype="multipart/form-data">
        <label for="table_name">Select Table:</label>
        <select name="table_name" id="table_name">
            <option value="certificate">Certificate</option>
            <option value="bachelor">Bachelor</option>
            <option value="diploma">Diploma</option>
            <option value="masters">Masters</option>
        </select>
        <br><br>
        <label for="reg_no">Reg No:</label>
        <input type="text" name="reg_no" id="reg_no" required>
        <br><br>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br><br>
        <label for="level">Level:</label>
        <input type="text" name="level" id="level" required>
        <br><br>
        <label for="admission_status">Admission Status:</label>
        <input type="text" name="admission_status" id="admission_status" required>
        <br><br>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
