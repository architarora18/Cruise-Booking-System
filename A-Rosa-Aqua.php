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
             <h1 style="color: white;">A-Rosa Aqua</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="A-Rosa-Aqua.php"><img src="img/A-Rosa Aqua.jpg" alt=""></a>
                        <div class="caption">
                            <a href="A-Rosa-Aqua.php"><h3>A-Rosa Aqua</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>The A-Rosa Aqua is a Rhine river cruise ship from A-ROSA River Cruises. 
                At 135m long and 11.4m wide, the A-ROSA Rhine vessels are even longer than 
                their Danube counterparts, but not as wide. The ship has three decks plus a 
                sun deck. Swan Hellenic is currently (2011) offering Rhine cruises on the A-Rosa
                Aqua under a partnership agreement with A-ROSA.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>
                         Operator:	A-ROSA River Cruises<br>
                       Built by:	Shipyard: Neptun Werft GmbH, Warnemnde, Germany<br>
                       Date Completed:	2009<br>
                       Length:	135 m<br>
                       Width:	11.4 m<br>
                       Decks:	4<br>
                       Passengers:	204</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
