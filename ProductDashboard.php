<?php
if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin') {
    echo "Welcome, Admin!";
} else {
    echo "Access Denied!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Admin</title>
  <link rel="stylesheet" href="style/dashboardP.css">
</head>
<body>
      
   

<div class="Dashboard-users">
    <p class="bliss">BLISS</p>
    <p class="p">DASHBOARD</p>
    <table border="1">
     
      <tr>
          <th>Image</th>
          <th style="width:150px;">Product name</th>
          <th>Brand</th>
          <th>Price</th>
          <th style="width:180px;">Price on sale</th>
          <th>Stock</th>
          <th class="edit"> <a href="edit.html">Edit Product</a></th>
          <th class="delete">Delete Product</th> 
      </tr>
      <a href="" style="text-decoration: underline;">Click here to view user dashboard instead.</a>

  </div>
 

  
</body>
</html>
</body>
</html>