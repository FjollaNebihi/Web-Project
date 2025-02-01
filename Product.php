
<?php
include_once 'CRUDProduct.php';
class Product{
    private $conn;
    private $table_name="produktet";

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
      public function RegisterProduct($Image, $Product_Name, $Price,$Description){
        $query ="INSERT INTO {$this->table_name} (Image, Product_Name, Price, Description) VALUES (:Image, :Product_Name, :Price, :Description)";
        $statement=$this->conn->prepare($query);

        $statement->bindParam(':Image', $Image);
        $statement->bindParam(':Product_Name', $Product_Name);
      
        $statement->bindParam(':Price', $Price);
        $statement->bindParam(':Description', $Description);

      
        
        
  
        if ($statement->execute()) {
          
          return true;
          echo "<script> alert('Product has been inserted'); </script>";
        }return false;

      }
    }
  