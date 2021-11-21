<?php
require("include/common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Destination Cruisese</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
         <div class="all">
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
             <h1><b>ALL DESTINATIONS</b></h1>

             <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="africa.php"><img src="img/africa.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Africa</h3>
                        </div>
                    </div>
                    </div>
 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="alaska.php"><img src="img/alaska2.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Alaska</h3>
                        </div>
                        </div>
</div>



<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="antarctica.php"><img src="img/antarctica.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Antarctica</h3>
                        </div>
                        </div>
</div>

<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="arctic.php"><img src="img/arctic.jpg" alt=""></a>
                        <div class="caption">
                            <h3>arctic</h3>
                        </div>
                        </div>
</div>

<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="australia.php"><img src="img/australia3.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Australia</h3>
                        </div>
                        </div>
</div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="amazon.php"><img src="img/amazon2.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Amazon</h3>
                        </div>
                        </div>
</div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Adelaide.php"><img src="img/Adelaide.jpeg" alt=""></a>
                        <div class="caption">
                            <h3>Adelaide</h3>
                        </div>
                        </div>
</div>
<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="bahamas.php"><img src="img/bahamas.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Bahamas</h3>
                        </div>
                        </div>
</div>
                 </div>
                 <div  class="row text-center" id="line2">
<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="canada.php"><img src="img/Canada.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Canada</h3>
                        </div>
                        </div>
</div>
                 
<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Cuba.php"><img src="img/Cuba.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Cuba</h3>
                        </div>
                        </div>
</div>

<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Calgary.php"><img src="img/Calgary.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Calgary</h3>
                        </div>
                        </div>
    </div>
<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Dubai.php"><img src="img/Dubai.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Dubai</h3>
                        </div>
                        </div>
    </div>
                      </div>
                     <div  class="row text-center" id="line3">
<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Dover.php"><img src="img/Dover.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Dover</h3>
                        </div>
                        </div>
    </div>
                      <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Fukuoka.php"><img src="img/Fukuoka.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Fukuoka</h3>
                        </div>
                        </div>
</div>
                      <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Greenwich.php"><img src="img/Greenwich.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Greenwich</h3>
                        </div>
                        </div>
</div>
                    
                      <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="India.php"><img src="img/India.jpg" alt=""></a>
                        <div class="caption">
                            <h3>India</h3>
                        </div>
                        </div>
</div>
                         </div>
                     <div  class="row text-center" id="line4">
                                               <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Koge.php"><img src="img/Koge.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Koge</h3>
                        </div>
                        </div>
</div>
                      <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="London.php"><img src="img/London.jpg" alt=""></a>
                        <div class="caption">
                            <h3>London</h3>
                        </div>
                        </div>
</div>
                      <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Mexico.php"><img src="img/Mexico.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Mexico</h3>
                        </div>
                        </div>
</div>
                     <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Mombasa.php"><img src="img/Mombasa.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Mombasa</h3>
                        </div>
                        </div>
</div>
                         </div>
                     <div  class="row text-center" id="line5">
                   <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Norway.php"><img src="img/Norway.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Norway</h3>
                        </div>
                        </div>
</div>
                                               <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Pacific-Northwest.php"><img src="img/Pacific-Northwest.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Pacific Northwest</h3>
                        </div>
                        </div>
</div>
                                               <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Paris.php"><img src="img/Paris.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Paris</h3>
                        </div>
                        </div>
</div>
                                               <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Russia.php"><img src="img/Russia.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Russia</h3>
                        </div>
                        </div>
</div>
                         </div>
                     <div  class="row text-center" id="line6">
                                               <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Rostock.php"><img src="img/Rostock.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Rostock</h3>
                        </div>
                        </div>
</div>
                                               <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Southern-Africa.php"><img src="img/Southern-Africa.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Southern Africa</h3>
                        </div>
                        </div>
</div>
                                               <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Southeast-Asia.php"><img src="img/Southeast-Asia.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Southeast Asia</h3>
                        </div>
                        </div>
</div>
                                               <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Tahiti.php"><img src="img/Tahiti.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Tahiti</h3>
                        </div>
                        </div>
</div>
                         </div>
                     <div  class="row text-center" id="line7">
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Toronto.php"><img src="img/Toronto.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Toronto</h3>
                        </div>
                        </div>
</div>
                  <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Zurich.php"><img src="img/Zurich.jpg" alt=""></a>
                        <div class="caption">
                            <h3>Zurich</h3>
                        </div>
                        </div>
</div>
</div>
</div>
        <?php
include ("include/footer.php");
?>
</body>
</html>
