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
             <h1 style="color: white;">Le Diamant</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Le-Diamant.php"><img src="img/Le Diamant.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Le-Diamant.php"><h3>Le Diamant</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Le Diamant is a former Moby Lines ship where she used to 
                    operate a fast cruise ferry servicing Sardinia and 
                    Corsica crossings.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Eckero Line<br>
                         Built by:	Daewoo Shipbuilding & Heavy Machinery Ltd of Okpo, South Korea<br>
                         Date Completed:	2001<br>
                         Gross Tonnage:	36093<br>
                         Length:	175 m<br>
                         Width:	27 m<br>
                         Passengers:	2080</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
