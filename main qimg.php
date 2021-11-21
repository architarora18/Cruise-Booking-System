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
             <h1 style="color: white;">Main Qimg</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="main qimg.php"><img src="img/main qimg.jpg" alt=""></a>
                        <div class="caption">
                            <a href="main qimg.php"><h3>Main Qimg</h3></a>
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
                     <p>Operator:	Main Qimg Foundation<br>
                         Built by:	Shipyard: Neptun Werft GmbH, Warnemnde, Germany<br>
                         Date Completed:   1989<br>
                         Gross Tonnage:	750<br>
                         Length:	 20m <br>
                         Width:	9 m<br>
                         Passengers:	20<br>
                         Crew:	21</p>
                 </div>
             </div>
         </div>
       <?php
include ("include/footer.php");
?>
    </body>
</html>
