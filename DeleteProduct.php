<?php
include_once 'CRUDProduct.php';

if (isset($_GET['ProductID']) && is_numeric($_POST['ProductID'])) {
    $productId = intval($_GET['ProductID']); // Sanitization

    $ProductRepo = new CRUDProduct();

    if ($ProductRepo->deleteProduct($productId)) { // Ensure deletion was successful
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
