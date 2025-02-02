<?php 
include_once 'Database.php';
include_once 'Product.php';

$conn = new mysqli("localhost", "root", "", "bliss");



$prod_id = $_GET['id'];



include_once 'CRUDProduct.php';

$Delete = new CRUDProduct();


$Delete->deleteProduct($prod_id);


header("location: AdminDashboard.php");
?>