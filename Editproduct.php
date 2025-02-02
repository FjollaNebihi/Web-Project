<?php 
include_once 'Database.php';
include_once 'Product.php';

$conn = new mysqli("localhost", "root", "", "bliss");



$prod_id = $_GET['id'];



$sql = "SELECT * FROM produktet WHERE ProductID = $prod_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the row 
    $row = $result->fetch_assoc();
} else {
    echo "No record found";
}
?>


<div id="forma">
<h1>Edit Product</h1>
<form method="post">
   
    <input type="file" name="Image" value="<?php echo $row['Image']; ?>" accept="image/*"><br><br>
    <input type="text" name="Product_Name" value="<?php echo $row['Product_Name']; ?>" ><br><br>
    <input type="text" name="Price" value="<?php echo $row['Price']; ?>" ><br><br>
    <input type="text" name="Description" value="<?php echo $row['Description']; ?>" ><br><br>
    <input type="submit" value="Update" id="btn">
</form>
</div>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $image = $_POST['Image'];
    $name = $_POST['Product_Name'];
    $price = $_POST['Price'];
    $desc = $_POST['Description'];
    

    $sql_up = "UPDATE produktet 
          SET 
              Image = '$image', 
              Product_Name = '$name', 
              Price = '$price', 
              Description = '$desc' 
          WHERE ProductID = '$prod_id'";

    if ($conn->query($sql_up) === TRUE) {
        
        
        echo "Record updated successfully";
        header ("Location: AdminDashboard.php");

    } else {
        echo "Error updating record: " . $conn->error;
    }
}

?>

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
    background-color:lightblue;
    border-radius:20px;
    position: absolute;
    margin-left:37%;
    margin-top:11%;
}
#btn{
    transition:0.8s;
    background-color:violet;
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