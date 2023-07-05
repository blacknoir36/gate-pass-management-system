<?php

require "signup_login_check.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

  $errors = sign($_POST);

	if(count($errors) == 0){
     
		header("Location: login.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Visitor Information Form</title>
    
    <style>
      body{
        width: 100%;
        height: 100vh;
        background: url(back.jpg);
        background-size: cover;
        background-position: center;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      .sign-up{
        width: 360px;
        height: 620px;
        margin: auto;
        border-radius: 5px;
        margin-top: 10px;
        color: orange;

      }
      h1{
        text-align: center;
      }
      form{
        margin-left: 10px;
      }
      form label{
        font-size: medium;
        margin-top: 10px;
        font-weight: 600;
      }
      form input{
        width: 60%;
        padding: 5px;
    
      }
     

      .container{
        position: absolute;
        width: 75%;
        height: 550px;
        background: url(back.jpg) no-repeat;
        background-size:cover ;
        background-position: center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .container .content {
        width: 58%;
        height: 100%;
        background: transparent;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        padding: 20PX;
        color: orange;
        padding: 80px;
       
    
      }
       .container .log-box{
        position: absolute;
        top: 0;
        right: 0;
        width: 42%;
        height: 100%;
        backdrop-filter: blur(20px);
;
       
       }
       .content .head2{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-style: italic;
        font-size: 30PX;
       }
       h2{
        font-size: 35PX;
       }
       .log-box input{
        width: 100%;
        height: 100%;
        background: transparent;
        
       }
       .signup {
        width: 100%;
        height: 45px;
        border: none;
        outline: none;
        background: blue;
        
       }
       .log-box .xxx {
        text-align: center;
        font-size: large;
        font-weight: 700;
       }
      
    </style>
  </head>
  <body>
    
<div class="backgroung">
    <div class="container">
        <div class="content">
            <h2>WELCOME!</h2>
            <h2 class="head1">To Our System Security</h2><br><br><br><br>
            <h2 class="head2">GATE PASS MANAGEMENT SYSTEM</h2>
        </div>
        <div class="log-box">
            <div class="sign-up">
    <h1>Sign Up</h1>
        <form action="" method="post">
      <label>First Name:</label><br>
      <input type="text" id="first_name" name= "first_name"  placeholder="" required><br>

      <label>Last Name:</label><br>
      <input type="text" placeholder="" id="last_name" name="last_name" required><br>

      <label for="email">Email Address:</label><br>
      <input type="email" placeholder="" id="email" name="email" required><br>
      
      <label>Password</label><br>
      <input type="password" placeholder="" id="password" name="password" required><br><br><br><br>

     
     <input type="submit" name="submit" value="Sign">
         </form>
         <div class="xxx">
    <p>Have an account?<a href="login.php">LOGIN HERE</a></p>
         </div>
    </div>
        </div>

    </div>
  </div>
  </body>
</html>
