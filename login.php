<?php
session_start();
include_once 'Database.php';
include_once 'User.php';
include_once 'UserRepo.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $db=new Database();
  $connection=$db->getConnection();
  $user=new User($connection);

  $username=$_POST['username'];
  $password=$_POST['password'];
  $role=$_POST['role'];
  $id=$_POST['id'];

  $user->LogIn($username, $password);

  if($user->LogIn($username, $password)) {
    if($_SESSION['role'] === 'Admin'){
        header("Location: AdminDashboard.php");
  } else {
      header("Location: index.php"); 
  }
  exit();
} else {
  echo "Invalid login credentials";
}
if(!$user->LogIn($username, $password)) {
  session_unset();
  session_destroy();
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <script src="script/validation.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In | Bliss</title>
  <link rel="stylesheet" href="style/login.css">
</head>
<body>
  
  <div class="logo">
    <p class="bliss">BLISS</p>
  </div>

  <div class="log-in-container">
    <div class="log-in">
      <h2>Welcome back!</h2>
      <form action="#" method="POST" name="login" onsubmit="return validateForm()"> 

        <input type="text" class="username" name="username" id="username" placeholder="Username">
        <div id="error1" style="color: red;"></div>
        <input type="password" class="password" name="password" id="password" placeholder="Password">
        <div id="error2" style="color: red;"></div>

        <div class="check">
          <input type="checkbox" class="checkbox" name="remember">
          <label class="remfor" for="remember">Remember me?</label>
          <a class="remfor" href="#">Forgot password?</a>
        </div>


        <button class="submit" onclick="validateForm()">Log in</button>

        <p class="sign-up">Don't have an account? <a href="signup.php">Sign up.</a></p>
      </form>
    </div>
  </div>
  
</body>
</html>