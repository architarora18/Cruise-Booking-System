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
         <div class="Mexico">
        <?php
include ("include/header.php");
?>
             <div class="Mexico-box">
            <h1>Mexico</h1>
           Mexico is located between latitudes 14° and 33°N, and longitudes 86° and 119°W in the southern
           portion of North America. Almost all of Mexico lies in the North American Plate, with small 
           parts of the Baja California peninsula on the Pacific and Cocos Plates. Geophysically, some 
           geographers include the territory east of the Isthmus of Tehuantepec (around 12% of the total)
           within Central America. Geopolitically, however, Mexico is entirely considered part of North 
           America, along with Canada and the United States.
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>


