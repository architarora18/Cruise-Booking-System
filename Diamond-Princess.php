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
             <h1 style="color: white;">Diamond Princess</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Diamond-Princess.php"><img src="img/Diamond Princess.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Diamond-Princess.php"><h3>Diamond Princess</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Diamond Princess is one of Princess Cruises� Grand-class ships. She is one of only two Princess cruise ships built in Japan, the other being her sister ship, the Sapphire Princess. The ship features luxurious suites, comfortable cabins, formal and casual dining places, lounges and more.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Princess Cruises<br>
                         Built by:	Mitsubishi Heavy Industries- Japan<br>
                         Date Completed:	2004<br>
                         Gross Tonnage:	115875<br>
                         Length:	289.86 m<br>
                         Width:	37.49 m<br>
                         Decks:	17<br>
                         Passengers:	2674<br>
                         Crew:	1238</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
