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
         <div class="australia">
        <?php
include ("include/header.php");
?>
             <div class="australia-box">
            <h1>AUSTRALIA</h1>
             Australia officially known as the Commonwealth of Australia, is a sovereign country comprising the
             mainland of the Australian continent, the island of Tasmania, and numerous smaller islands. 
             It is the largest country in Oceania and the world's sixth-largest country by total area.
             Surrounded by the Indian and Pacific oceans, Australia is separated from Asia by the Arafura and Timor seas, 
             with the Coral Sea lying off the Queensland coast, and the Tasman Sea lying between Australia and New Zealand. 
             The world's smallest continent and sixth largest country by total area, Australia—owing to its size and
             isolation—is often dubbed the "island continent" and is sometimes considered the world's largest island.
             <a href="booknow.php"> <button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
