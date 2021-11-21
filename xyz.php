
<?php
require("include/common.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Destination Cruises</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  </head>
  <style media="screen">
  .carousel-cell {
    width: 100%;
    }
    .carousel-cell img{
        width: 1500px;
        height: 500px;
    }
    /* cell number */
    .carousel-cell:before {
      display: block;
    }
  </style>
  <body>
      <div class="navbar">
    <a href="index.php"><img  class="logo" src="img/0.jpg"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="booknow.php">Book Now</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <?php
                if (isset($_SESSION['email'])) {
                    ?>
                      <li><a href="profile.php">Profile</a></li>
                    
                    <?php
                } else {
                    ?>
                    <li><a href="login.php">login</a></li>
                    <li><a href="signup.php">signup</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
    <h1 class="w3-center">INTERIORS</h1>
    <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
      <div class="carousel-cell">
          <img class="w3-image" src="img/8.jpg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="img/9.jpg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="img/10.jpg">
      </div>
        <div class="carousel-cell">
        <img class="w3-image" src="img/11.jpg">
      </div>
        <div class="carousel-cell">
        <img class="w3-image" src="img/12.jpg">
      </div>
        <div class="carousel-cell">
        <img class="w3-image" src="img/18.jpg">
      </div>
        <div class="carousel-cell">
        <img class="w3-image" src="img/15.jpg">
      </div>
        <div class="carousel-cell">
        <img class="w3-image" src="img/16.jpg">
      </div>
    </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  </body>
</html>
