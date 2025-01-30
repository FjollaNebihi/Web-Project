<!DOCTYPE html>
<html lang="en">
<head>

  <script src="script/signup-validation1.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Best Sellers | Bliss</title>
 
  <link rel="stylesheet" href="style/bestsellers.css">
<script src="script/slider.js"></script>
</head>
<body>
<div class="header">

    <div class="slider">


    <p id="slider-text" class="text">Check out this month's best selling products!</p>
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

    <div class="container-2">
      <a href="sale.php"><button class="button-sale">SALE</button></a>
      
      <button class="button">New</button>
      <a href="brands.php"><button class="button">Brands</button></a>
      <a href="Skincare.php"><button class="button">Skin Care</button></a>
      <button class="button">Hair Care</button>
      <button class="button">Make Up</button>
      <a href="bestsellers.php"><button class="button-1">Best Sellers</button></a>
      <button class="button-gift">Gifts & Gift Cards</button>
    </div>


  <div id="container">

    <div id="produktet" class="produkti-1">
      <button id="button">BEST SELLER</button>
      <button id="button-2">ADD TO FAVORITES</button>
      <img src="img/HudaPowder.png" alt="Small Image" class="small-image" id="slideshow">
      <button onclick="ndrroImg()" class="slider-button">See more</button>
      <p id="text">Easy Bake Loose Baking & Setting Powder</p>
      <p id="cmimi">$38.00</p></div>
      
    
    <div id="produktet" class="produkti-2">
      <button id="button">BEST SELLER</button>
      <button id="button-2">ADD TO FAVORITES</button>
      <img src="img/NarsConcelear.png" alt="Small Image" class="small-image2">
      <p id="text">Creamy Concelear with Medium Coverage</p>
      <p id="cmimi">$36.00</p></div>
      
    


    <div id="produktet" class="produkti-3">
      <button id="button">BEST SELLER</button>
      <button id="button-2">ADD TO FAVORITES</button>
      <img src="img/RareBeautyBlush.png" alt="Small Image" class="small-image3">
      <p id="text">Mini Soft Pinch Liquid Blush</p>
      <p id="cmimi">$14.00</p></div>
      
    
      <div id="produktet" class="produkti-4">
      <button id="button">BEST SELLER</button>
      <button id="button-2">ADD TO FAVORITES</button>
      <img src="img/RareHighlight.png" alt="Small Image" class="small-image3">
      <p id="text">Positive Light Liquid Highlight</p>
      <p id="cmimi">$16.00-$25.00</p></div>
    
    
      <div id="produktet" class="produkti-5"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/Milk.png" alt="Small Image" class="small-image4">
        <p id="text">Dewy Cream Highlighter Stick</p>
        <p id="cmimi">$24.00</p></div>
      
   
      <div id="produktet"class="produkti-6"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/CTBronzer.png" alt="Small Image" class="small-image4">
        <p id="text">Hollywood Contour Wand</p>
        <p id="cmimi">$46.00</p></div>
      
    
      <div id="produktet"class="produkti-7"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/BronzerPowder.png" alt="Small Image" class="small-image5">
        <p id="text">Airbrush Matte Bronzer</p>
        <p id="cmimi">$39.00</p></div>
      
    
      <div id="produktet"class="produkti-8"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/RareHighlighter2.png" alt="Small Image" class="small-image2">
        <p id="text">Positive Silky Touch Highlight</p>
        <p id="cmimi">$25.00</p></div>
      
    
      <div id="produktet"class="produkti-9"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/Kylie.png" alt="Small Image" class="small-image4">
        <p id="text">Cheek Glow Balm</p>
        <p id="cmimi">$19.95</p></div>
      
      <div id="produktet"class="produkti-10"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/Tarte.png" alt="Small Image" class="small-image2">
        <p id="text">Creaseless Full Coverage Concelear</p>
        <p id="cmimi">$26.00</p></div>
      
    
      <div id="produktet"class="produkti-11"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/Mascara.png" alt="Small Image" class="small-image2">
        <p id="text">Mini Rare Beauty Mascara</p>
        <p id="cmimi">$16.00</p></div>
      
    
      <div id="produktet"class="produkti-12"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/FentyTint.png" alt="Small Image" class="small-image6">
        <p id="text">Eaze Drop Blurring Skin Tint</p>
        <p id="cmimi">$36.00</p></div>
      
    
      <div id="produktet"class="produkti-13"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/FentyBlush.png" alt="Small Image" class="small-image5">
        <p id="text">Freestyle Blush</p>
        <p id="cmimi">$40.00</p></div>
      
    
      <div id="produktet"class="produkti-14"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/FentyHighlight.png" alt="Small Image" class="small-image5">
        <p id="text">Light-Diffusing Highlighter</p>
        <p id="cmimi">$40.00</p></div>
      
    
      <div id="produktet"class="produkti-15"><button id="button">BEST SELLER</button>
        <button id="button-2">ADD TO FAVORITES</button>
        <img src="img/BronzerStick.png" alt="Small Image" class="small-image2">
        <p id="text">Matte Contour Skinstick</p>
        <p id="cmimi">$32.00</p></div>

        <div id="produktet"class="produkti-16"><button id="button">BEST SELLER</button>
          <button id="button-2">ADD TO FAVORITES</button>
          <img src="img/FentyGloss.png" alt="Small Image" class="small-image2">
          <p id="text">Gloss Bomb Lip Luminizer</p>
          <p id="cmimi">$21.00-$24.00</p></div>
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