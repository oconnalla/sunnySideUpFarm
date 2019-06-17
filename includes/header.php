<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunny Side Up Farms</title>
    <link rel="stylesheet" href="css/style.css">
     <script type='text/javascript'>
      function myFunction(x) {
          alert("I AM MAD!");
        x.classList.toggle("change");
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
    <body>
        <!--<div class="hamburgerContainer" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
       </div> -->
        <div id="landingContainer">
            <div id="navAndLogoContainer">
                <a href="index.php"><img id="FarmLogo" src="images/logoOption2.png" alt="SunnySide Up Logo"></a>
                <div class="navbar">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Our Farm</a>
                    <a href="product.php">Shop</a>
                    <div class="dropdown">
                        <button class="dropButton">Our Animals 
                        </button>
                        <div class="dropdownContent">
                            <a href="dames.php">Our Dames</a>
                            <a href="sires.php">Our Sires</a>
                            <a href="chickens.php">Our Chickens</a>
                            <a href="forSale.php">Goats For Sale</a>
                        </div>
                    </div>
                    <a href="contactme.php">Contact Us</a> 
                </div>
            </div>
            <!-- <img id="goatCover" src="images/fakeGoat5.jpg" alt="Goats"> -->
            <div id='goatCover'>
                <h2 class="bannerTitle" id="mainBannerTitle">Welcome To Our Farm!</h2>
                <h4 id="subBannerTitle">See Our Products ></h4>
            </div>

            