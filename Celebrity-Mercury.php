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
                 <h1 style="color: white;">Celebrity Mercury</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Celebrity-Mercury.php"><img src="img/Celebrity Mercury.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Celebrity-Mercury.php"><h3>Celebrity Mercury</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Celebrity Mercury left Celebrity Cruises in February 2011 to join TUI
                    Cruises fleet, sailing under the name of Mein Schiff 2. Celebrity Mercury
                    was built as a Celebrity class ship, and sister ship to Celebrity Century 
                    and, Celebrity Galaxy.         </p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>
                         Operator:	Celebrity Cruises<br>
                         Built by:	Meyer Werft shipyard in Papenburg, Germany<br>
                         Date Completed:	1997<br>
                         Gross Tonnage:	77713<br>
                         Length:	264 m<br>
                         Width:	32 m<br>
                         Decks:	12<br>
                         Passengers:	1886<br>
                         Crew:	999</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
