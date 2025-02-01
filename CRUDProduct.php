<?php
include_once 'Database.php';
include_once 'Product.php';


class CRUDProduct{
  public $connection;

  function __construct(){
    $conn= new Database();
    $this->connection=$conn->getConnection();

  }
  function createProduct($produket){
    $conn= $this->connection;

    $ProductID=$produktet->getID();
    $Image=$produktet->getImage();
    $Product_Name=$produktet->getProduct_Name();
    $Price=$produktet->getPrice();
    $Description=$produktet->getDescription();

    $sql="INSERT INTO produktet (ProductID , Image , Product_Name, Price,Description) VALUES ( ? ,? ,? ,?,?,?)";

    $statement=$conn->prepare($sql);

    $statement->execute ([$ProductID,$Image,$Product_Name,$Price,$Description]);
    if($statement->execute()){
      return true;
      echo "<script> alert ('Product has been inserted')</script>";
    }
    return false;
  }
  function getAllProducts(){
    $conn=$this->connection;
    $sql="SELECT * FROM produktet";
    $statement=$conn->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
  function getProductById($ProductID){
    $conn=$this->connection;

    $sql="SELECT * FROM produktet WHERE ProductID='$ProductID'";

    $statement=$conn->prepare($sql);
    $produktet=$statement->fetch();

    return $produktet;
  }
  function updateProduct($ProductID,$Image,$Product_Name,$Price,$Description){

    $imagePath=$Image;
    $modified=$_SESSION['username'];

    $updateProduct="UPDATE produktet SET 
                        imagePath='$Image',
                        Product_Name='$Product_Name',
                
                        Price='$Price' ,
                        Description='$Description' WHERE ProductID=$ProductID";

    if($this->conn->query($updateProduct)===true){
      echo "Product was edited by : " .$modified;
    }else{
      echo "ERROR" . $this->conn->error;
    }
  }
  function deleteProduct($ProductID) {
    $conn = $this->connection;
  
  
    $sql = "DELETE FROM produktet WHERE ProductID=?";
  
    $statement = $conn->prepare($sql); 
  
   
    $statement->execute([$ProductID]);
    if($statement->execute()){
      echo "<script>alert('Delete was successful');</script>";
      return true;
    }
    return false;
  
   
    
  }
  }
  
  
  ?>
  