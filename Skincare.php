<?php
session_start();

if(!isset($_SESSION['user_id'])){
  header("Location:login.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Skin Care | BLISS </title>
    <link rel="stylesheet" href="style/Skincare.css">
</head>
<body>
<div class="header">
    <div class="slider">
    
    <p id="slider-text" class="text">Check out this month's best selling products!</p>
    </div>
    <div style=" display: flex;
  justify-content: right;
  margin-top:-30px;
  margin-right: 30px;
  gap:10px;">
    <?php 
   
   if ( $_SESSION['role'] === 'Admin'){
       echo '<a href="AdminDashboard.php">
           <button style="font-size:14px;
        width: 210px;
        height:30px;
        border-radius:15px;
        background-color: #FF8BA0;
    color:white;
    border:1px solid #FF8BA0;box-shadow:2px 2px 2px black;margin-bottom:9px;margin-top:-30">
               You have admin privileges!
           </button>
       </a>';
   }
   ?>
      <?php 
   
   if ( $_SESSION['role'] === 'User'){
       echo '<a href="AdminDashboard.php">
           <button style="font-size:14px;
        width: 170px;
        height:30px;
        border-radius:15px;
        background-color: #FF8BA0;
    color:white;
    border:1px solid #FF8BA0;box-shadow:2px 2px 2px black;margin-bottom:-40px;">
               Welcome!
           </button>
       </a>';
   }
   ?>
   </div>
    <script>
      const teksti=[
  "Take care of your skin with this season's best products!",
  "Discover the secret to glowing skin today!",
  "Nourish your skin with our premium skincare range.",
  "Achieve healthy, radiant skin effortlessly!",
  "Indulge in self-care with our luxurious skincare products."
];

let i=0

function ndrroTekstin(){
  const sliderText = document.getElementById("slider-text");
  i = (i + 1) % teksti.length; 
  sliderText.textContent = teksti[i];
}

setInterval(ndrroTekstin, 4000);
</script>

    <div class="logo">
        <p class="bliss">BLISS</p>
    </div>
   
    <div class="container-2" style="display: flex;
    justify-content: center;
    gap:20px;
    margin: 8px;
    border-bottom: 2px solid lightpink;
    height:40px;
    align-items: center;
    padding-top: 15px;
    padding-bottom: 15px;">
      <a href="index.php"><button style="font-size:14px;
        width: 105px;
        height:30px;
        border-radius:15px; 
        background-color: #FF8BA0;
    color:white;
    border:1px solid #FF8BA0;box-shadow:2px 2px 2px black;" >Home</button></a>
            <a href="sale.php"><button class="button-sale">SALE</button></a>
      
      <button class="button">New</button>
      <a href="brands.php"><button class="button">Brands</button></a>
      <a href="Skincare.php"><button class="button-1">Skin Care</button></a>
      <button class="button">Hair Care</button>
      <button class="button">Make Up</button>
      <a href="bestsellers.php"><button class="button">Best Sellers</button></a>
      <button class="button-gift">Gifts & Gift Cards</button>

      <a href="logout.php"><button style="font-size:14px;
        width: 105px;
        height:30px;
        border-radius:15px; 
        background-color: #FF8BA0;
    color:white;
    border:1px solid #FF8BA0;box-shadow:2px 2px 2px black;">LOG OUT</button>
  </a>

        </div>




    <div id="container">




    
    <?php 
include_once 'CRUDProduct.php';  


$conn = new mysqli("localhost", "root", "", "bliss");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM produktet";  
$statement = $conn->query($sql);

if (!$statement) {
    die("Query failed: " . $conn->error); 
}

if ($statement->num_rows > 0) {
    while ($row = $statement->fetch_assoc()) {
        echo '<div id="produktet">
                <button class="skin">' . htmlspecialchars($row["Description"]) . '</button>
                <img src="' . htmlspecialchars($row["Image"]) . '" class="image">
                <p id="description">' . htmlspecialchars($row["Product_Name"]) . '</p>
                <p id="cmimi">' . htmlspecialchars($row["Price"]) . '</p>
              </div>'; 
    }
} else {
    echo "<p>No products found.</p>";
}

$conn->close();
?>
    </body>
<footer class="footer">
    <div class="footer-links">
        <a href="/terms" class="footer-link">Terms of Service</a>
        <span>|</span>
        <a href="/privacy" class="footer-link">Privacy Policy</a>
        <span>|</span>
        <a href="/contact" class="footer-link">Contact us</a>
    </div>
    <p>© 2024 My Website. All rights reserved.</p>
</footer>
</html>
