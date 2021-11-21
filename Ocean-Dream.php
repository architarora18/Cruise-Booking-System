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
             <h1 style="color: white;">Ocean Dream</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Ocean-Dream.php"><img src="img/Ocean Dream.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Ocean-Dream.php"><h3>Ocean Dream</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>The Ocean Dream is currently operated by Pullmantur Cruises. 
                    The ship was originally built in 1981 by the Aalborg Verft
                    shipyard in Denmark, and has gone through several renovations 
                    since then. The cruises are marketed for a largely adult
                    clientele, and the ship has no amenities for very small 
                    children, although there are game rooms for teens.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Pullmantur Cruises<br>
                         Built by:	Aalborg Verft, Alborg, Denmark<br>
                         Date Completed:	1981<br>
                         Gross Tonnage:	35000<br>
                         Length:	205 m<br>
                         Width:	26.33 m<br>
                         Decks:	11<br>
                         Passengers:	1422<br>
                         Crew:	526</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
