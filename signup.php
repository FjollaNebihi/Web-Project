<?php
include_once 'Database.php';
include_once 'User.php';

if($_SERVER['REQUEST_METHOD']=='POST') {
  $db= new Database();
  $connection = $db-> getConnection();
  $user= new User($connection);

  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  //regjistrojme user dhe i ruhen te dhenat ne databaze
  if($user->Register($first_name,$last_name,$username,$email,$password)){
    header("Location: login.php");
    exit;
  }else{
    echo "Error registering user!";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <script src="script/SignUpValidation.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Bliss</title>

  <link rel="stylesheet" href="style/signup.css">
  
</head>
<body>
  <div class="logo">
    <p class="bliss">BLISS</p>
  </div>
  
  <div class="sign-up-container">
    <div class="sign-up">
      <h2>Create an account</h2>

      <form action="#" method="POST" name="SignUp" onsubmit="return validateForm()"> 
      <input type="text" class="name" name="first_name" id="name" placeholder="First Name">
      <div id="error1"></div>
      <input type="text" class="last-name" name="last_name" id="lastname" placeholder="Last Name">
      <div id="error2"></div>
     
        <input type="text" class="username" name="username" id="username" placeholder="Create a username">
        <div id="error3"></div>
        <input type="text" class="email" name="email" id="email" placeholder="Email address">
        <div id="error4"></div>
        <input type="password" class="password" name="password" id="password" placeholder="Create a password">
        <div id="error5"></div>
        <button class="submit" onclick="validateForm()">Sign Up</button>
  
        <p class="log-in">Already have an account?<a href="login.php"> Log in.</a></p>
      

    </form>
    

    </div>
  </div>
  <!--
   <div class="continue">
    <button class="facebook">Sign in with Facebook</button>
    <button class="Google">Sign in with Google</button>
    <button class="Apple">Sign in with Apple</button>
  </div>-->
 
  
</body>
</html>