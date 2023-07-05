<?php
require "loginverify.php";

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $errors = login($_POST);

    if (count($errors) == 0) {
        header("Location: home_page1.php");
        die;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
            <style>
                
                body {
                    font-family: Arial, sans-serif;
                }

                h1, h2 {
                text-align: center;
                margin-bottom: 30px;
                color: white; /* Set the text color to white */
                }

                .my-logo {
                display: block;
                margin: auto;
                }

                /* Center the login form in the middle of the page */
                .login-form {
                margin: 0 auto;
                width: 400px;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 5px #888;
                }

                /* Style the input fields and labels */
                label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
                border-end-start-radius: 2px;
                color: white; /* Set the text color to white */
                }

                input[type="text"],
                input[type="password"] {
                width: 100%;
                padding: 7px;
                border: none;
                margin-bottom: 15px;
                border-radius: 20px;
                }

                input[type="submit"] {
                background-color: #4CAF50;
                color: #fff;
                border: none;
                padding: 20px;
                border-radius: 10px;
                cursor: pointer;
                text-align: center;
                }

                /* Video background */
                .video-bg {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                overflow: hidden;
                }

                .video-bg video {
                min-width: 100vh;
                min-height: 100%;
                }

            </style>
    </head>
    <body>
        <div class="video-bg">
        <video autoplay loop muted>
            <source src="pexel.mp4" type="video/mp4">
            <!-- You can add additional source elements for different video formats -->
        </video>
        </div>


            <h1>UNIVERSITY OF DAR ES SALAAM</h1>
            <h2>SYSTEM SECURITY</h2>
            <img class="my-logo" src="logo.png" alt=""> <br>
            <form class="login-form" action="" method="post">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br><br>
                <input type="submit" value="Login">
            </form>
    </body>
</html>