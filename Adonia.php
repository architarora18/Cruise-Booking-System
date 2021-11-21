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
              <h1 style="color: white;">Adonia</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Adonia.php"><img src="img/Adonia.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Adonia.php"><h3>Adonia</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Adonia is a P&O Cruise ship which joined the fleet in 
                    2011 and offers cruises exclusively for adults. She 
                    previously sailed as Royal Princess for Princess cruises
                    . The ship is a relatively small-sized at around 180m in
                    length and carries around 710 passengers. She was built 
                    in France and commenced service in 2001. The ship features
                    a central atrium with grand staircase.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	P&O Cruises<br>
Built by:	Chantiers de l'Atlantique, St. Nazaire, France<br>
Date Completed:	2001<br>
Gross Tonnage:	30277<br>
Length:	180.45 m<br>
Width:	25.46 m<br>
Decks:	11<br>
Passengers:	710</p>
                 </div>
             </div>
         </div>
        <?php
include("include/footer.php");
?>
    </body>
</html>
