<?php
require("include/common.php");
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Destination Cruises</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script>
$(document).ready(function(){
  $("#submit").click(function(){
    alert("You would get your reply within 24 hours.");
  });
});
          
  </script>
    </head>
    <body>
        <div class="contact-us">
            <div class="contact-us1">
<div class="navbar">
    <a href="index.php"><img style="float: left;" class="logo" src="img/0.jpg"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="booknow.php">Book Now</a></li>
                    <li><a>Destinations</a>
                        <ul>
                            <li><a href="africa.php">Africa</a></li>
                            <li><a href="antarctica.php">Antarctica</a></li>
                            <li><a href="alaska.php">Alaska</a></li>
                            <li><a href="amazon.php">Amazon</a></li>
                            <li><a href="arctic.php">Arctic</a></li>
                            <li><a href="australia.php">Australia</a></li>
                            <li><a href="bahamas.php">Bahamas</a></li>
                            <li><a href="Dubai.php">Dubai</a></li>
                            <li><a href="view_more.php">view more</a></li>
                        </ul>
                    </li>
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
            <div class="contact-tittle">
                <h1>Contact Us</h1>
                <h2>we are always there for you every time</h2>
                <h4> you can ask any problem if you are facing</h4>
            </div>
                <div class="contact-form">
                    <form action="contact_script.php" method="POST">
                        <input name="name" type="text" class="form-control" placeholder="Your Name" required ><br>
                        <input name="email" type="email" class="form-control" placeholder="Your Email" required ><br>
                        <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br><br>
                        <input type="submit" id="submit" class="button2 btn-primary btn-lg active" value="SEND MESSAGE">
                </form>               
                        </div>

            </div>
            </div>

        <?php
include ("include/footer.php");
?>
    </body>
</html>
