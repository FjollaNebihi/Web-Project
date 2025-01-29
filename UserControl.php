<?php
include_once 'UserRepo.php';
include_once 'User.php';

if (isset($_POST['registerBtn'])){
    if(empty($_POST['first_name'])) || empty($_POST['last_name']) || 
    empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
        echo"Please input all the required information!";
    }else{
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$id = $username . rand(100,999);

$user= new User($id, $first_name, $last_name, $username, $email, $password);

$UserRepo = new UserRepo();

#UserRepo -> insertUser($user);
    }

    }
    ?>
