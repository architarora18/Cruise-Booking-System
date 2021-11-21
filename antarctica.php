<?php
require("include/common.php");
?><!DOCTYPE html>
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
         <div class="antarctica">
        <?php
include ("include/header.php");
?>
             <div class="antarctica-box">
            <h1>ANTARCTICA</h1>
           Often described as a continent of superlatives, Antarctica is the world’s southernmost continent.
           It is also the world’s highest, driest, windiest, coldest, and iciest continent. 
           Antarctica is about 5.5 million square miles (14.2 million square km) in size, and thick ice covers about 98 percent of the land. 
           The continent is divided into East Antarctica (which is largely composed of a high ice-covered plateau)
           and West Antarctica (which is largely an ice sheet covering an archipelago of mountainous islands).
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
