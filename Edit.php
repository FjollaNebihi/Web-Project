<?php
$userId = $_GET['id'];

include_once 'UserRepo.php';

$UserRepository = new UserRepo();

$user  = $UserRepository->getUserById($userId);

if(isset($_POST['EDIT'])){
    $id = $user['id'];
    $name = $_POST['first_name'];
    $surname = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $UserRepository->updateUser($id, $name, $surname, $email, $username,$password);

    header("location:AdminDashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="script/SignUpValidation.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit | Bliss</title>

  <link rel="stylesheet" href="style/edit.css">
  
</head>
<body>
  <div class="logo">
    <p class="bliss">BLISS</p>
  </div>
  
  <div class="sign-up-container">
    <div class="sign-up">
      <h2>Edit your credentials</h2>

      <form action="" method="POST" name="SignUp" onsubmit="return validateForm()"> 
      <input type="text" name="id" value="<?=$user['id']?>" readonly> 
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
        <button class="submit" onclick="validateForm()"name ="EDIT">Save your changes</button>
  
      

    </form>
    

    </div>
 
 
  
</body>
</html>