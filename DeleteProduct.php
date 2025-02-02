<?php
include_once 'CRUDProduct.php';
include_once 'Database.php';

if (isset($_GET['ProductID']) && is_numeric($_POST['ProductID'])) {
    $productId = intval($_GET['ProductID']); 

    $ProductRepo = new CRUDProduct();

    if ($ProductRepo->deleteProduct($productId)) { 
        header("Location: AdminDashboard.php?msg=ProductDeleted");
        exit();
    } else {
        header("Location: AdminDashboard.php?error=DeletionFailed");
        exit();
    }
} else {
    header("Location: AdminDashboard.php?error=InvalidProductID");
    exit();
}
?>
