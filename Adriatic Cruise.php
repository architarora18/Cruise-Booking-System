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
             <h1 style="color: white;">Adriatic Cruise</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Adriatic Cruise.php"><img src="img/Adriatic Cruise.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Adriatic Cruise.php"><h3>Adriatic Cruise</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>The Adriatic Cruise is a beautiful ship and
                    has a crew of 27, and capable of carrying 35 passengers. The
                    ship appeared in the UK BBC television series, The Onedin Line.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Adriatic Cruise Foundation<br>
                         Built by:	Daewoo Shipbuilding & Heavy Machinery Ltd of Okpo, South Korea<br>
                         Date Completed:   1999<br>
                         Gross Tonnage:	1150<br>
                         Length:	74 m <br>
                         Width:	13 m<br>
                         Passengers:	35<br>
                         Crew:	27</p>
                 </div>
             </div>
         </div>
       <?php
include ("include/footer.php");
?>
    </body>
</html>
