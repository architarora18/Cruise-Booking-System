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
             <h1 style="color: white;">Christian Radich</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Christian-Radich.php"><img src="img/Christian Radich.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Christian-Radich.php"><h3>Christian Radich</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>The Christian Radich is a Norwegian full rigged sailing ship. 
                    The steel-hulled , three-masted ship carries a total of about
                    1360 square metres of sail. She is based in Oslo, Norway and
                    has a crew of 18, and capable of carrying 88 passengers. The
                    ship appeared in the UK BBC television series, The Onedin Line.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Christian Radich Sail Training Foundation<br>
                         Built by:	Framn�s Mekaniske V�rksted, Sandefjord, Norway<br>
                         Date Completed:	1937<br>
                         Gross Tonnage:	1050<br>
                         Length:	62.5 m (73 m overall)<br>
                         Width:	9.7 m<br>
                         Passengers:	80<br>
                         Crew:	18</p>
                 </div>
             </div>
         </div>
       <?php
include ("include/footer.php");
?>
    </body>
</html>
