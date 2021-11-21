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
         <div class="bahamas">
<?php
include ("include/header.php");
?>
             <div class="bahamas-box">
            <h1>BAHAMAS</h1>
             The Bahamas consists of a chain of islands spread out over some 800 kilometres (500 mi) in the Atlantic Ocean, 
             located to the east of Florida in the United States, north of Cuba and Hispaniola and west of the British Overseas
             Territory of the Turks and Caicos Islands (with which it forms the Lucayan archipelago). It lies between latitudes 20°
             and 28°N, and longitudes 72° and 80°W and straddles the Tropic of Cancer. There are some 700 islands and cays in total 
             (of which 30 are inhabited) with a total land area of 10,010 km2 (3,860 sq mi).
             <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
