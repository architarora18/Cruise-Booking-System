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
             <h1 style="color: white;">Kapitan Dranitsyn</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Kapitan-Dranitsyn.php"><img src="img/Kapitan Dranitsyn.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Kapitan-Dranitsyn.php"><h3>Kapitan Dranitsyn</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Kapitan Dranitsyn is a Russian icebreaker, and is a 
                    sister ship to the Kapitan Khlebnikov. She has more
                    been modified as a passenger ship and offers cruise 
                    excursions to the Arctic Ocean for groups of up to 
                    100 passengers The ship has a helicopter, fully enclosed
                    lifeboats and a small hospital on board.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Built by:	W�rtsil�, Helsinki New Shipyard, Finland<br>
                         Date Completed:	1980<br>
                         Gross Tonnage:	14917<br>
                         Length:	131 m<br>
                         Width:	26.5 m<br>
                         Passengers:	100<br>
                         Crew:	60</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
