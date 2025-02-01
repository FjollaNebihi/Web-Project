
<?php
include_once 'Database.php';
class AddProduct{
  public $conn;
  public $table_name='produktet';

  public function __construct($db){
    $this->conn=$db;
  }
  function getID(){
    return $this->ProductID;

  }
  function getImage(){
    return $this->Image;
  }
  function getProduct_Name(){
    return $this->Product_Name;
  }
 
  function getPrice(){
    return $this->Price;
  }
  function getDescription(){
    return $this->Description;
  }
  public function RegisterAP($Image,$Product_Name,$Price,$Description){
    $query="INSERT INTO {$this->table_name} (Image,Product_Name,Price,Description) VALUES (:Image, :Product_Name,  :Price , :Description) ";
    $statement=$this->conn->prepare($query);

    $statement->bindParam(':Image', $Image);
    $statement->bindParam(':Product_Name', $Product_Name);
    
    $statement->bindParam(':Price' , $Price);
    $statement->bindParam(' :Description', $Description);
  

    try {
      if ($statement->execute()) {
          return true;
      } else {
          return false;
      }
  } catch (PDOException $e) {
      echo "Failed to add product: " . $e->getMessage();
      return false;
  }
}
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
    <h2>Add products</h2>
    <form action="upload_product.php" method="post" enctype="multipart/form-data">
        <label for="Product_Name">Product Name:</label><br>
        <input type="text" id="Product_Name" name="Product_Name" required><br><br>

      
        <label for="Price">Price:</label><br>
        <input type="number" id="Price" name="Price"  required><br><br>
        
        <label for="Description">Description:</label><br>
        <input type="number" id="Description" name="Description"  required><br><br>


        

        <label for="Image">Image:</label><br>
        <input type="file" id="Image" name="Image" accept="image/*" required><br><br>

        <input type="submit" value="Add products">
    </form>
</body>
</html>

