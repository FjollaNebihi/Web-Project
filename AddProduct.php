
<?php
include_once 'Database.php';
include_once 'Product.php';

if($_SERVER['REQUEST_METHOD']=='POST') {
  $db= new Database();
  $connection = $db-> getConnection();
  $produktet= new Product($connection);

  $Product_Name=$_POST['Product_Name'];
  $Price=$_POST['Price'];
  $Description=$_POST['Description'];


  
  $imageName = $_FILES['Image']['name'];
    $imageTmpName = $_FILES['Image']['tmp_name'];
    $imagePath = "img/" . $imageName; 

   
    move_uploaded_file($imageTmpName, $imagePath);


    $produktet->RegisterProduct($imagePath, $Product_Name, $Price, $Description);
    header("Location: AdminDashboard.php");
    exit;
  }

?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Registration Form</title>
</head>
<body>
<div id="forma">
<h1>Add Product</h1>
    <form action="AddProduct.php" method="post" enctype="multipart/form-data">
        <label for="Product_Name">Product Name:</label><br>
        <input type="text" id="Product_Name" name="Product_Name" required><br><br>

      
        <label for="Price">Price:</label><br>
        <input type="text" id="Price" name="Price"  required><br><br>

        <label for="Description">Description:</label><br>
        <input type="text" id="Description" name="Description"  required><br><br>


        

        <label for="Image">Image:</label><br>
        <input type="file" id="Image" name="Image" accept="image/*" required><br><br>

        <input type="submit" value="Add products" id="btn">
    </form>
    </div>
</body>
</html>

<style>
   body{
  background-color: #FFDDE2;
  margin:0;
  padding:0;
  box-sizing: border-box;

}
h1{
    color:#fff;
}
#forma{
    padding: 20px;
    background-color:#CF7793;
    border-radius:20px;
    position: absolute;
    margin-left:37%;
    margin-top:11%;
}
#btn{
    transition:0.8s;
    background-color:#F1A5AD;
    border:0;
    border-radius:10px;
    padding:15px;
}
input{
    border:0;
    padding: 5px;
    border-radius:10px;
}
#btn:hover{
    transition:0.8s;
    background-color:lightpink;
    }
</style>
