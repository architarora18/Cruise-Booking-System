<?php
require("include/common.php");
?> <!DOCTYPE html>
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
             <h1 style="color: white;">Celebrity Constellation</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Celebrity-Constellation.php"><img src="img/Celebrity Constellation.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Celebrity-Constellation.php"><h3>Celebrity Constellation</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Celebrity Constellation is the most recent of the Celebrity cruise lines 
                    Millennium class vessels. The ship's interiors are a blend of modern a
                    and old world art and the finest resort designs. Celebrity Constellation 
                    has been recently upgraded to include many of the Solstice class features.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Celebrity Cruises<br>
Built by:	Chantiers de L'Atlantique in St. Nazaire, France<br>
Date Completed:	2002<br>
Gross Tonnage:	91000<br>
Length:	294 m<br>
Width:	32 m<br>
Decks:	13<br>
Passengers:	1950<br>
Crew:	999</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
