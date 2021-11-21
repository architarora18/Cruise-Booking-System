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
             <h1 style="color: white;">Norwegian Jade</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Norwegian-Jade.php"><img src="img/Norwegian Jade.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Norwegian-Jade.php"><h3>Norwegian Jade</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>The Norwegian Jade features distinctive hull art,
                    in similar style to other NCL cruise ships. Norwegian 
                    Jade is the second ship in the Norwegian Cruise 
                    Line Jewel Class, and sister ship to Norwegian Jewel,
                    Norwegian Pearl, and Norwegian Gem.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Norwegian Cruise Line (NCL)<br>
                         Built by:	Meyer Werft Papenburg, Germany<br>
                         Date Completed:	2006<br>
                         Gross Tonnage:	93500<br>
                         Decks:	15<br>
                         Passengers:	2224<br>
                         Crew:	1100</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
