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
        
        <div id="produktet" class="produkti-1">
            <button class="skin">FOR OILY SKIN</button>
            <img src="img/AHABHA.png" class="image">
            <p id="description">The Ordinary Peeling Solution</p>
            <p id="cmimi">$14.00-$20.00</p>
        </div>

        <div id="produktet" class="produkti-2">
            <button class="skin">FOR DRY SKIN</button>
            <img src="img/B5.png">
            <p id="description">La Roche Posay B5 Vitamin</p>
            <p id="cmimi">$20.00</p>
        </div>

        <div id="produktet" class="produkti-3">
            <button class="skin">FOR DRY SKIN</button>
            <img src="img/C.png">
            <p id="description">La Roche Posay Vitamin C</p>
            <p id="cmimi">$20.00</p>
        </div>

        <div id="produktet" class="produkti-4">
            <button class="skin">FOR ACNE</button>
            <img src="img/Retinol.png">
            <p id="description">La Roche Posay Retinol B3</p>
            <p id="cmimi">$24.00-$30.00</p>
        </div>

        <div id="produktet" class="produkti-5">
            <button class="skin">FOR AGING</button>
            <img src="img/PHA.png">
            <p id="description">Some By Mi Miracle Toner</p>
            <p id="cmimi">$32.00</p>
        </div>

        <div id="produktet" class="produkti-6">
            <button class="skin">FOR DRY SKIN</button>
            <img src="img/SnailMucin.png">
            <p id="description">COSRX Snail Mucin</p>
            <p id="cmimi">$19.00-$34.00</p>
        </div>

        <div id="produktet" class="produkti-7">
            <button class="skin">AGING</button>
            <img src="img/PaulasChoice.png">
            <p id="description">2% BHA Liquid Exfoliant</p>
            <p id="cmimi">$30.00</p>
        </div>

        <div id="produktet" class="produkti-8">
            <button class="skin">DARK SPOTS</button>
            <img src="img/Niacinamide.png">
            <p id="description">The Ordinary Niacinamide 10%+Zinc 1%</p>
            <p id="cmimi">$14.00-$20.00</p>
        </div>

        <div id="produktet" class="produkti-9">
            <button class="skin">HYDRATING</button>
            <img src="img/Oil.png">
            <p id="description">Beauty of Joseon Cleansing Oil</p>
            <p id="cmimi">$20.00</p>
        </div>

        <div id="produktet" class="produkti-10">
            <button class="skin">FOR DULL SKIN</button>
            <img src="img/MagicSerum.png">
            <p id="description">Charlotte's Magic Serum 100ml</p>
            <p id="cmimi">$76.00</p>
        </div>

        <div id="produktet" class="produkti-11">
            <button class="skin">FOR DULL SKIN</button>
            <img src="img/Caudalie.png">
            <p id="description">Beauty Elixir</p>
            <p id="cmimi">$19.00</p>
        </div>

        <div id="produktet" class="produkti-12">
            <button class="skin">FOR DRY SKIN</button>
            <img src="img/Ceravee.png">
            <p id="description">Cerave Hydrating Toner</p>
            <p id="cmimi">$16.00-$28.00</p>
        </div>

        <div id="produktet" class="produkti-13">
            <button class="skin">ACNE SCARS</button>
            <img src="img/Centella.png">
            <p id="description">Centella Brightening Capsule</p>
            <p id="cmimi">$34.00</p>
        </div>

        <div id="produktet" class="produkti-14">
            <button class="skin">DARK SPOTS</button>
            <img src="img/Beauty.png">
            <p id="description">Beauty of Joseon Eye Serum</p>
            <p id="cmimi">$23.00</p>
        </div>

        <div id="produktet" class="produkti-15">
            <button class="skin">FOR OILY SKIN</button>
            <img src="img/Glycolic.png">
            <p id="description">The Ordinary Glycolic Acid 7%</p>
            <p id="cmimi">$18.00-$27.00</p>
        </div>

        <div id="produktet" class="produkti-16">
            <button class="skin">HYDRATING</button>
            <img src="img/SPF.png">
            <p id="description">I'm From Rice Toner</p>
            <p id="cmimi">$24.00</p>
        </div>
    </div>

    <div id="skincare">
        <div class="ordinary-container">
            <img src="img/TheOrdinary.png" alt="The Ordinary" class="ordinary-image">
            <div class="ordinary-content">
                <h3 class="ordinary-title">Skincare Beyond Routine</h3>
                <p class="ordinary-text">Schedule an appointment with our professional team to discover personalized solutions.</p>
                <button class="appointment-button">Book Now</button>
            </div>
        </div>
    </div>
    
    
    
    
    
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
