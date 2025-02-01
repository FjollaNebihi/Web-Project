qetu e bon njejt si te register form qe kur te shkruhen tdhenat dalin direkt ndatabaze
<?php
include_once 'AddProduct.php';
include_once 'Database.php';
class AddProduct{
  public $conn;
  public $table_name='produktet';

  public function __construct($db){
    $this->conn=$db;
  }
  function getImage(){
    return $this->Image;
  }
  function getProduct_Name(){
    return $this->Product_Name;
  }
  function getBrand(){
    return $this->Brand;
  }
  function getPrice(){
    return $this->Price;
  }
  function getPrice_OnSale(){
    return $this->Price_OnSale;
  }
  function getStock(){
    return $this->Stock;
  
    
  }
  public function RegisterAP($Image,$Product_Name,$Brand,$Price,$Price_OnSale,$Stock){
    $query="INSERT INTO {$this->table_name} (Image,Product_Name,Brand,Price,Price_OnSale,Stock) VALUES (:Image, :Product_Name, :Brand, :Price, :Price_OnSale, :Stock) ";
    $statement=$this->conn->prepare($query);

    $statement->bindParam(':Image', $Image);
    $statement->bindParam(':Product_Name', $Product_Name);
    $statement->bindParam(':Brand', $Brand);
    $statement->bindParam(':Price' , $Price);
    $statement->bindParam(':Price_OnSale', $Price_OnSale); 
    $statement->bindParam(':Stock' , $Stock);

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
