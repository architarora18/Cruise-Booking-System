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
             <h1 style="color: white;">Empress</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Empress.php"><img src="img/Empress.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Empress.php"><h3>Empress</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Sailing the routes in Germany, the Baltic Seas, the Canary Islands, 
                    and the Atlantic, the MS Empress proves that you can be old but still 
                    beautiful. In 2008, the Royal Caribbean International thought the vessel
                    was bound for retirement, but the recent Pullmantur purchase proved them wrong</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Pullmantur Cruises<br>
                         Built by:	Chantiers de lAntartique, Saint-Nazaire, France<br>
                         Date Completed:	1989<br>
                         Gross Tonnage:	48563<br>
                         Length:	210.81 m<br>
                         Width:	30.7 m<br>
                         Decks:	11<br>
                         Passengers:	1850<br>
                         Crew:	668</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
