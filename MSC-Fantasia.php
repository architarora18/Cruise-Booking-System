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
             <h1 style="color: white;">MSC Fantasia</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="MSC-Fantasia.php"><img src="img/MSC Fantasia.jpg" alt=""></a>
                        <div class="caption">
                            <a href="MSC-Fantasia.php"><h3>MSC Fantasia</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>The MSC Fantasia is the flagship of the MSC Italian Cruises.
                    Its one of the cruise lines biggest vessels carrying up to
                    3900 passengers. While its sophisticated, there are amenities 
                    for children, making it a family-friendly cruise ship.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	MSC Italian Cruises<br>
                         Built by:	STX Europe, Saint-Nazaire, France<br>
                         Date Completed:	2008<br>
                         Gross Tonnage:	135000<br>
                         Length:	333.30 m<br>
                         Width:	37.89 m<br>
                         Decks:	13<br>
                         Passengers:	3900<br>
                         Crew:	1313</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
