<?php
$errors = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $properties = $_POST['properties'];
  $person = $_POST['person'];
  $purpose = $_POST['purpose'];
  $arrivalTime = $_POST['arrival_time'];

  // Validate the email address
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
  }

  // Check for other validation conditions and add them to the $errors array if necessary

  if (count($errors) == 0) {
    // Store the email in a session variable
    session_start();
    $_SESSION['visitorEmail'] = $email;

    header("Location: QRcode.php");
    die;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Visitor Information Form</title>
<style>
body {
  background: #1C415D;
}

form {
  background-color: rgb(144, 153, 153);
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  margin: 10px;
  max-width: 700px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"] {
  width: 90%;
  padding: 5px;
  margin-bottom: 10px;
  border-radius: 5px;
  border: 3px solid #ccc;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

h1 {}

</style>
</head>
<body>
<h1>Visitor Information Form</h1>
<form action="" method="POST">
  <label for="name">Full Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="address">Address:</label>
  <input type="text" id="address" name="address" required>

  <label for="phone">Phone Number:</label>
  <input type="text" id="phone" name="phone" required>

  <label for="email">Email Address:</label>
  <input type="email" id="email" name="email" required>

  <label for="properties">Properties:</label>
  <input type="text" id="properties" name="properties">

  <label for="person">Contact Person:</label>
  <input type="text" id="person" name="person" required>

  <label for="purpose">Purpose of Visit:</label>
  <input type="text" id="purpose" name="purpose" required>

  <label for="arrival-time">Arrival Time:</label>
  <input type="time" id="arrival-time" name="arrival_time" required>

  <label for="departure-time">Departure Time:</label>
  <input type="time" id="departure-time" name="departure_time">

  <input type="submit" value="Submit" onclick="captureDepartureTime()">
</form>

<script>
function captureDepartureTime() {
  var currentTime = new Date();
  var hours = currentTime.getHours();
  var minutes = currentTime.getMinutes();

  // Format the time as HH:MM
  var formattedTime = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes);

  document.getElementById("departure-time").value = formattedTime;
}
</script>

</body>
</html>
