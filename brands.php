<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRANDS | BLISS</title>
</head>
<body>
    <link rel="stylesheet" href="style/brands.css">

</body>
</html>
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
        <a href="brands.php"><button class="button-1" id="brands-button">Brands</button></a>
        <a href="Skincare.php"><button class="button">Skin Care</button></a>
        <button class="button">Hair Care</button>
        <button class="button">Make Up</button>
        <a href="bestsellers.php"><button class="button">Best Sellers</button></a>
        <button class="button-gift">Gifts & Gift Cards</button>
    </div>

    <div id="container">

        <link rel="stylesheet" href="brands.css">

        <div class="gallery">

            <div class="photo">
                <img src="img/YSL.png" alt="Small">
            </div>

                <div class="photo">
                <img src="img/Nars.png" alt="Small">
            </div>

            <div class="photo">
                <img src="img/Dior.png" alt="Small">
            </div>

            <div class="photo">
                <img src="img/HudaBeauty.png" alt="Small">
            </div>

            <div class="photo">
                <img src="img/Maybelline.png" alt="Small">
            </div>

            <div class="photo">
                <img src="img/Toofaced.png" alt="Small">
            </div>

            <div class="photo">
                <img src="img/Rimmel.png" alt="Small">
            </div>

            <div class="photo">
                <img src="img/LaRochePosay.png" alt="Small">
            </div>

            <div class="photo">
                    <img src="img/MAC.png" alt="Small">
            </div>

                <div class="photo">
                    <img src="img/Sephora.png" alt="Small">
                </div>

                <div class="photo">
                    <img src="img/KKW.png" alt="Small">
                </div>

                <div class="photo">
                    <img src="img/Garnier.png" alt="Small">
                </div>

                <div class="photo">
                        <img src="img/NYX.png" alt="Small">
                </div>

                <div class="photo">
                    <img src="img/Loreal.png" alt="Small">
                </div>

                <div class="photo">
                    <img src="img/EsteeLauder.png" alt="Small">
                </div>

                <div class="photo">
                    <img src="img/FentyBeauty.png" alt="Small">
                </div>

                <div class="photo">
                    <img src="img/drunkelephant.png" alt="Small">
                </div>

                <div class="photo">
                    <img src="img/AnastasiaBeverlyHills.png" alt="Small">
                </div>

                <div class="photo">
                    <img src="img/Revlon.png" alt="Small">
                    </div>

                <div class="photo">
                    <img src="img/Kerastase.png" alt="Small">
                    </div>

                <div class="photo">
                    <img src="img/Clinique.png" alt="Small">
                </div>

                    <div class="photo">
                        <img src="img/it.png" alt="Small">
                    </div>

                    <div class="photo">
                        <img src="img/Neutrogena.png" alt="Small">
                        </div>

                    <div class="photo">
                        <img src="img/Lancome.png" alt="Small">
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
