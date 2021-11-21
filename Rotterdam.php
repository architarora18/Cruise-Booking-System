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
             <h1 style="color: white;">Rotterdam</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Rotterdam.php"><img src="img/Rotterdam.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Rotterdam.php"><h3>Rotterdam</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>MS Rotterdam VI is the pride of Holland America Line fleet. 
                    The ship, built in 1997, features Dutch culture and heritage 
                    it exhibits covering more than hundred years of history. The 
                    central eye catching piece of art is the embellished sculpture 
                    of the clock tower with twelve clocks providing world time.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Holland America Line<br>
                         Built by:	Fincantieri shipyard in Marghera, Italy<br>
                         Date Completed:	1997<br>
                         Gross Tonnage:	61849<br>
                         Length:	237.7 m<br>
                         Width:	32.2 m<br>
                         Decks:	10<br>
                         Passengers:	1404<br>
                         Crew:	600</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
