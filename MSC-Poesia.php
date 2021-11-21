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
             <h1 style="color: white;">MSC Poesia</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="MSC-Poesia.php"><img src="img/MSC Poesia.jpg" alt=""></a>
                        <div class="caption">
                            <a href="MSC-Poesia.php"><h3>MSC Poesia</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>The MSC Poesia is patterned after the MSC Musica.
                    While it also features elegant luxury amenities,
                    the focus is more on the arts. From the decorations
                    in the staterooms to the elegant lobby centerpiece,
                    youre sure to fall in love with this vessel.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	MSC Italian Cruises<br>
                         Built by:	Aker Yards, Saint-Nazaire, France<br>
                         Date Completed:	2008<br>
                         Gross Tonnage:	93330<br>
                         Length:	293.80 m<br>
                         Width:	32.19 m<br>
                         Decks:	13<br>
                         Passengers:	3605<br>
                         Crew:	987</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
