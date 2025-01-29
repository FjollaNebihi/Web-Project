<?php
session_start();

if(!isset($_SESSION['user_id'])){
  header("Location:login.php");
  exit;
}

echo "Welcome, " .$_SESSION['username'] . "!";

if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin') {
    echo '<button>Admin Button</button>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home | Bliss</title>
  <link rel="stylesheet" href="style/style.css">

</head>
<body>
  <div class="header">
    <div class="slider">
    <p id="slider-text" class="text">Sign up or <a href=login.php class="">log in</a>  to your account for free shipping.</p>
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


    <div class="account">
     <a href="signup.php" >
      <button class="sign-up">Sign Up</button>
     </a>
     <a href="login.php">
      <button class="log-in">Log In</button>
     </a>
     
    </div>
  </div>



  <div class="logo">
    <p class="bliss">BLISS</p>
  </div>

  <div class="container">
    <a href="sale.php"><button class="button-sale">SALE</button></a>
      
    <button class="button">New</button>
    <a href="brands.php"><button class="button">Brands</button></a>
    <a href="Skincare.php"><button class="button">Skin Care</button></a>
    <button class="button">Hair Care</button>
    <button class="button">Make Up</button>
    <a href="bestsellers.php"><button class="button-1">Best Sellers</button></a>
    <button class="button-gift">Gifts & Gift Cards</button>
  </div>
  
  <div class="content">
</div>
<div class="welcome-container">
  <h3>Clean beauty • Cruelty Free</h3>
  <h1>Enhance Your Natural Beauty</h1>
  <p class="tagline">From foundations that do more to effortlessly expressive colour. Explore the possibilities.</p>
</div>

<div class="button-container">

  <a href="bestsellers.php"><button class="bests">shop our best sellers</button></a>
  <button class="btn">shop now</button>
</div>


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

</body>
</html>