<?php
require("include/common.php");
?>
 <!DOCTYPE html>
<html>
    <head>
        <title>Destination Cruise</title>
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
                    ?>
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
             <h1><b>Our Cruises</b></h1>
        <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="A-Rosa-Aqua.php"><img src="img/A-Rosa Aqua.jpg" alt=""></a>
                        <div class="caption">
                            <a href="A-Rosa-Aqua.php"><h3>A-Rosa Aqua</h3></a>
                        </div>
                    </div>
                    </div>
            <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Adonia.php"><img src="img/Adonia.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Adonia.php"><h3>Adonia</h3></a>
                        </div>
                    </div>
                    </div>
            <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="AIDAaura.php"><img src="img/AIDAaura.jpg" alt=""></a>
                        <div class="caption">
                            <a href="AIDAaura.php"><h3>AIDAaura</h3></a>
                        </div>
                    </div>
                    </div>
            <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Carnival-Conquest.php"><img src="img/Carnival Conquest.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Carnival-Conquest.php"><h3>Carnival Conquest</h3></a>
                        </div>
                    </div>
                    </div>
        </div>
             <div class="row text-center" id="line2">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Celebrity-Constellation.php"><img src="img/Celebrity Constellation.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Celebrity-Constellation.php"><h3>Celebrity Constellation</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Celebrity-Mercury.php"><img src="img/Celebrity Mercury.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Celebrity-Mercury.php"><h3>Celebrity Mercury</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Christian-Radich.php"><img src="img/Christian Radich.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Christian-Radich.php"><h3>Christian Radich</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Coral-Princess.php"><img src="img/Coral Princess.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Coral-Princess.php"><h3>Coral Princess</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
             <div class="row text-center" id="line3">
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Discovery.php"><img src="img/Discovery.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Discovery.php"><h3>Discovery</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Diamond-Princess.php"><img src="img/Diamond Princess.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Diamond-Princess.php"><h3>Diamond Princess</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Empress.php"><img src="img/Empress.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Empress.php"><h3>Empress</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Europa.php"><img src="img/Europa.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Europa.php"><h3>Europa</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
             <div class="row text-center" id="line4">
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Freedom.php"><img src="img/Freedom.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Freedom.php"><h3>Freedom</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Kapitan-Dranitsyn.php"><img src="img/Kapitan Dranitsyn.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Kapitan-Dranitsyn.php"><h3>Kapitan Dranitsyn</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Kristina-Brahe.php"><img src="img/Kristina Brahe.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Kristina-Brahe.php"><h3>Kristina Brahe</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Kong-Harald.php"><img src="img/Kong Harald.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Kong-Harald.php"><h3>Kong Harald</h3></a>
                        </div>
                    </div>
                    </div>
         </div>
             <div class="row text-center" id="line5">
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Le-Diamant.php"><img src="img/Le Diamant.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Le-Diamant.php"><h3>Le Diamant</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Lofoten.php"><img src="img/Lofoten.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Lofoten.php"><h3>Lofoten</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="MSC-Fantasia.php"><img src="img/MSC Fantasia.jpg" alt=""></a>
                        <div class="caption">
                            <a href="MSC-Fantasia.php"><h3>MSC Fantasia</h3></a>
                        </div>
                    </div>
                    </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="MSC-Poesia.php"><img src="img/MSC Poesia.jpg" alt=""></a>
                        <div class="caption">
                            <a href="MSC-Poesia.php"><h3>MSC Poesia</h3></a>
                        </div>
                    </div>
                    </div>
         </div>
               <div class="row text-center" id="line6">
                   <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="MSC-Sinfonia.php"><img src="img/MSC Sinfonia.jpg" alt=""></a>
                        <div class="caption">
                            <a href="MSC-Sinfonia.php"><h3>MSC Sinfonia</h3></a>
                        </div>
                    </div>
                    </div>
                   <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Norwegian-Jade.php"><img src="img/Norwegian Jade.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Norwegian-Jade.php"><h3>Norwegian Jade</h3></a>
                        </div>
                    </div>
                    </div>
                   <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Ocean-Dream.php"><img src="img/Ocean Dream.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Ocean-Dream.php"><h3>Ocean Dream</h3></a>
                        </div>
                    </div>
                    </div>
                   <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Rotterdam.php"><img src="img/Rotterdam.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Rotterdam.php"><h3>Rotterdam</h3></a>
                        </div>
                    </div>
                    </div>
               </div>
             <div class="row text-center" id="line7">
                   <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="elite-travels.php"><img src="img/elite travels.jpeg" alt=""></a>
                        <div class="caption">
                            <a href="elite-travels.php"><h3>Elite Travels</h3></a>
                        </div>
                    </div>
                    </div>
                   <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="queen-eleganra.php"><img src="img/queen eleganra.jpg" alt=""></a>
                        <div class="caption">
                            <a href="queen-eleganra.php"><h3>Queen Eleganra</h3></a>
                        </div>
                    </div>
                    </div>
                   <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Adriatic Cruise.php"><img src="img/Adriatic Cruise.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Adriatic Cruise.php"><h3>Adriatic Cruise</h3></a>
                        </div>
                    </div>
                    </div>
                   <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="main qimg.php"><img src="img/main qimg.jpg" alt=""></a>
                        <div class="caption">
                            <a href="main qimg.php"><h3>Main Qimg</h3></a>
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
