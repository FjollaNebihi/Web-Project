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
    <script src="script/signup-validation1.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SALE | BLISS </title>

    <link rel="stylesheet" href="style/sale.css">
    <script src="script/Slideri2.js">
      var i=0;
var imgArray=[
 "img/R (1).png",
 "img/R (2).png",
 "img/R.png",
 "img/R (3).png"
];

function ndrroImg(){
  document.getElementById('slideshow').src=imgArray[i];
  if(i < imgArray.length -1){
    i++;
  }else{
    i=0;
 
  }
}
document.body.addEventListener('load',ndrroImg());
    </script>
 
 <style>
 .slider-button{
  margin-right:-420px;
  background-color:#ffffff;
border:1.5px solid #FF8BA0;
color:#FF7084;
  border-radius: 7px;
  margin-top:260px;
  margin-bottom: -8px;
  width:90px;
  height: 22px;
}


#slideshow{
  width:235px;
  height:auto;
  margin-top:20px;
  margin-bottom:50px;
  margin-right:-59px;
  margin-left:20px;
}
 </style>


</head>
<body>

<script src="script/Slideri3.js">
  var i=0;
var imagesArray=[
"img/2faced.jpeg",
"img/OIP.jpg",
"img/O2jpg.jpg",
"img/OIP3.png"
];

function FotoTjeter(){
  document.getElementById('slider').src=imagesArray[i];
  if(i < imagesArray.length -1){
    i++;
  }else{
    i=0;
 
  }
}
document.body.addEventListener('load',FotoTjeter());
</script>


<style>
  #slider{
    width:225px;
    height:auto;
    margin-top:20px;
    margin-bottom:50px;
    margin-right:-59px;
    margin-left:30px;
  }

  .slider-btn{
    margin-right:-420px;
    background-color:#ffffff;
  border:1.5px solid #FF8BA0;
  color:#FF7084;
    border-radius: 7px;
    margin-top:260px;
    margin-bottom: -8px;
    width:90px;
    height: 22px;
  }
</style>

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
      <a href="Skincare.php"><button class="button">Skin Care</button></a>
      <button class="button">Hair Care</button>
      <button class="button">Make Up</button>
      <a href="bestsellers.php"><button class="button-1">Best Sellers</button></a>
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



<div id="produktet" class="product1">
    <button id="button">ON SALE</button>
    <img src="img/mario_ethereal.png" alt="Small">
    <p id="text">Mario-Ethereal Eyes Palette</p>
    <p id="cmimi">$48.00</p>
</div>
    <div id="produktet" class="product2">
        <button id="button">ON SALE</button>
        <img src="img/SK-II.png" alt="Small">
        <p id="text">SK-II Pitera Essence Set</p>
        <p id="cmimi">$80.00</p>
    </div>
        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/ConclearDior.jpeg" alt="Small">
            <p id="text">Dior-Backstage Flash Perfector Concealer</p>
            <p id="cmimi">$33.00</p>
        </div>
        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/FentyMascara.png" alt="Small">
            <p id="text">Fenty-Mascara Hella Thicc</p>
            <p id="cmimi">$30.45</p>
        </div>
        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/RhodeBlush.jpeg" alt="Small">
            <p id="text">Rhode Pocket Blush-Sleepy Girl</p>
            <p id="cmimi">$18.00</p>
        </div>
        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/Kiko.png" alt="Small">
            <p id="text">Kiko-3d Hydra Lipgloss Shade 17</p>
            <p id="cmimi">$17.50</p>
        </div>

        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/GlossDrip.jpeg" alt="Small">
            <p id="text">Kylie Cosmetics-Gloss Drip</p>
            <p id="cmimi">$15.50</p>
            </div>
            
        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/RareBlush.png" alt="Small">
            <p id="text">Rare Beauty Blush-Shade Hope</p>
            <p id="cmimi">$22.00</p>
            </div>

        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/Loreal-makeupset.png" alt="Small">
            <p id="text">Loreal Makeup Set</p>
            <p id="cmimi">$57.00</p>
            </div>

            <div id="produktet" class="product2">
                <button id="button">ON SALE</button>
                        <img src="img/R (1).png" alt="Small Image" class="small-image" id="slideshow">
                        <button onclick="ndrroImg()" style="   margin-right:-420px;
                        background-color:#ffffff;
                      border:1.5px solid red;
                      color:red;
                        border-radius: 7px;
                        margin-top:260px;
                        margin-bottom: -8px;
                        width:90px;
                        height: 22px;">...see more</button>
                        <p id="text">Rhode Peptide Lip Tint- Espresso</p>
                        <p id="cmimi">$23.00.</p>
                    </div>
                    
        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/kkwbeauty.png" alt="Small">
            <p id="text">KKW Beauty-Body Makeup</p>
            <p id="cmimi">$55.00</p>
            </div>
        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/Laneige.png" alt="Small">
            <p id="text"> Laneige Lip Balm-Gummy Bear</p>
            <p id="cmimi">$35.20</p>
        </div>
        <div id="produktet" class="product2">
                    <button id="button">ON SALE</button>
                    <img src="img/eyecream.png" alt="Small">
                    <p id="text">KylieSkin-Eyecream</p>
                    <p id="cmimi">$26.00</p>
        </div>
        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/LipDuoSet.png" alt="Small">
            <p id="text">Laneige Divine Lip Duo Set</p>
            <p id="cmimi">$34.70</p>
        </div>
        <div id="produktet" class="product2">
            <button id="button">ON SALE</button>
            <img src="img/DElephant.png" alt="Small">
            <p id="text">Drunk Elephant The Littles Kit</p>
            <p id="cmimi">$40.20</p>
        </div>
        <div id="produktet" class="product2">

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <button id="button">ON SALE</button>
            <img src="img/2faced.jpeg" alt="Small Image" class="small-image" id="slider">
              <button onclick="FotoTjeter()" class="slider-button" style="   margin-right:-420px;
              background-color:#ffffff;
            border:1.5px solid red;
            color:red;
              border-radius: 7px;
              margin-top:260px;
              margin-bottom: -8px;
              width:90px;
              height: 22px;">...see more</button>
            <p id="text">Too Faced-Cloud Clush Blush</p>
            <p id="cmimi">$23.60</p>

                    
                </div>
                
            </div>
            

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
            
            </head>
            </body>





