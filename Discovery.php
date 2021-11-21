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
         <div class="cruise">
             <div class="cruise1">
        <?php
include ("include/header.php");
?>
             <h1 style="color: white;">Discovery</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Discovery.php"><img src="img/Discovery.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Discovery.php"><h3>Discovery</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Discovery is a cruise ship operated by Peter Deilmann 
                    Cruises. Peter Deilmann Cruises, a German cruise company 
                    well known for its river cruises</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>
                         Operator:	Voyages of Discovery<br>
                         Date Completed:	2003<br>
                         Gross Tonnage:	21186</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
