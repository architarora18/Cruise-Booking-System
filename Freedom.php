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
             <h1 style="color: white;">Freedom</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Freedom.php"><img src="img/Freedom.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Freedom.php"><h3>Freedom</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Freedom is a former Moby Lines ship where she used to 
                    operate a fast cruise ferry servicing Sardinia and 
                    Corsica crossings. The ship is 175m long and 27m broad,
                    with capacity to transport 2080 passengers and 700 
                    vehicles at atop speed of 29 knots. </p>
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
