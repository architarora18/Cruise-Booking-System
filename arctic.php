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
         <div class="arctic">
        <?php
include ("include/header.php");
?>
             <div class="arctic-box">
            <h1>ARCTIC</h1>
        The Arctic is a polar region located at the northernmost part of Earth. The Arctic consists of the Arctic Ocean,
        adjacent seas. Land within the Arctic region has seasonally varying snow and ice cover, with predominantly treeless permafrost 
        (permanently frozen underground ice) containing tundra. Arctic seas contain seasonal sea ice in many places.
        <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
