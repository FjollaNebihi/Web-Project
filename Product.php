
<?php
class Product{
    private $conn;
    private $table_name="produktet";

    public function __construct($db){
        $this->conn=$db;
      }

      public function RegisterProduct($Image, $Product_Name, $Brand, $Price, $Price_OnSale, $Stock){
        $query ="INSERT INTO {$this->table_name} (Image, Product_Name, Brand, Price, Price_OnSale, Stock) VALUES (:Image, :Product_Name, :Brand, :Price, :Price_OnSale, :Stock)";
        $statement=$this->conn->prepare($query);

        $statement->bindParam(':Image', $Image);
        $statement->bindParam(':Product_Name', $Product_Name);
        $statement->bindParam(':Brand', $Brand);
        $statement->bindParam(':Price', $Price);
        $statement->bindParam(':Price_OnSale', $Price_OnSale);
        $statement->bindParam(':Stock', $Stock);

      
        $statement->execute();
        
  
        if ($statement->execute()) {
          
          $this->conn = null;
          echo "Produkt i regjistruar me sukses.";

      } else {
          echo "Ka ndodhur një gabim gjatë regjistrimit të produktit.";
      }
  } catch (PDOException $e) {

    echo "Error:" . $e->getMessage();
  }
  
  ?>