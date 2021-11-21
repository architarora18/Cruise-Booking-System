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
             <h1 style="color: white;">Carnival Conquest</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Carnival-Conquest.php"><img src="img/Carnival Conquest.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Carnival-Conquest.php"><h3>Carnival Conquest</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>The Carnival Conquest cruise ship is the first of the Conquest Class 
                    ships in the Carnival fleet. capable of carrying 2,974 passengers, 
                    with a cruising speed of 22.5 knots and weighing at 110,000 tons.
                    The ship features a huge LED screen at the Carnival Seaside Theater
                    and a rich diversity of entertainment options with various bars, night
                    clubs and lounges.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>
                         Operator:	Carnival Cruise Lines<br>
Built by:	Fincantieri shipyard in Monfalcone, Italy<br>
Date Completed:	2002<br>
Gross Tonnage:	110000<br>
Length:	290.2 m<br>
Width:	25.4 m<br>
Decks:	13<br>
Passengers:	2974<br>
Crew:	1150</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
