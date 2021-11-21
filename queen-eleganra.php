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
             <h1 style="color: white;">Queen Eleganra</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="queen-eleganra.php"><img src="img/queen eleganra.jpg" alt=""></a>
                        <div class="caption">
                            <a href="queen-eleganra.php"><h3>Queen Eleganra</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>The Queen Eleganra is a beautiful ship and
                    has a crew of 20, and capable of carrying 80 passengers. The
                    ship appeared in the UK BBC television series, The Onedin Line.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Queen Eleganra Foundation<br>
                         Built by:	Helsinki New Shipyard, Finland<br>
                         Date Completed:   1990<br>
                         Gross Tonnage:	2400<br>
                         Length:	63 m <br>
                         Width:	19 m<br>
                         Passengers:	100<br>
                         Crew:	25</p>
                 </div>
             </div>
         </div>
       <?php
include ("include/footer.php");
?>
    </body>
</html>
