<?php

$userId = $_GET['id']; 


include_once 'UserRepo.php';

$UserReposition = new UserRepo();


$UserReposition->deleteUser($userId);


header("location: AdminDashboard.php");

?>