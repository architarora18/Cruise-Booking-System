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
             <h1 style="color: white;">Coral Princess</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Coral-Princess.php"><img src="img/Coral Princess.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Coral-Princess.php"><h3>Coral Princess</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Coral Princess is one of five Sun class vessels in the Princess
                    Cruises fleet, featuring a new and improved power generation
                    engineering, bringing together gas turbine and diesel engine.
                    Coral Princess is one of two Princess ships designed especially 
                    for sailing the Panama Canal. Around 90% of the staterooms have ocean views.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>
                         Operator:	Princess Cruises<br>
                         Built by:	Chantiers de l'Atlantique<br>
                         Date Completed:	2003<br>
                         Gross Tonnage:	91627<br>
                         Length:	294 m<br>
                         Width:	32.2 m<br>
                         Decks:	16<br>
                         Passengers:	2581<br>
                         Crew:	778</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
