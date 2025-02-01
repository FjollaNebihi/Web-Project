<?php

$productID = $_GET['ProductID']; 


include_once 'CRUDProduct.php';

$Product = new CRUDProduct();


$Product->deleteProduct($productID);


header("location: AdminDashboard.php");

?>