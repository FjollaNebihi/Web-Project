<?php
session_start();

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid user ID.");
}



include_once 'UserRepo.php';

$UserRepository = new UserRepo();
$user = $UserRepository->getUserById('id');



if (isset($_POST['EDIT'])) {
    $id = $user['id'];
    $name = trim($_POST['first_name']);
    $surname = trim($_POST['last_name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $role = trim($_POST['role']);
    $password = trim($_POST['password']);

    $UserRepository->updateUser($id, $name, $surname, $email, $role, $username, $password);

    echo "<script>alert('User updated successfully!'); window.location.href='AdminDashboard.php';</script>";
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
                <input type="text" name="id" value="<?php echo htmlspecialchars($userId); ?>" readonly>
                <input type="text" class="name" name="name" id="name"  placeholder="First Name" >
                <div id="error1"></div>

                <input type="text" class="last-name" name="surname" id="lastname"  placeholder="Last Name">
                <div id="error2"></div>
                
                <input type="text" class="username" name="username" id="username"  placeholder="Username">
                <div id="error3"></div>

                <input type="text" class="email" name="email" id="email"  placeholder="Email address">
                <div id="error4"></div>

                <input type="text" class="username" name="role" id="role"  placeholder="Role">
                
                <input type="password" class="password" name="password" id="password"  placeholder="New Password" >
                <div id="error5"></div>
                
                <button type="submit" name="EDIT" style="font-size:18px; margin:10px; padding:10px; background: transparent; border:1px solid #885c5c; border-radius:10px; font-size:15px; width:260px;height:40px;">
                    Save your changes
                </button>
            </form>
        </div>
    </div>
</body>
</html>
