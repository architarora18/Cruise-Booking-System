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
         <div class="Fukuoka">
        <?php
include ("include/header.php");
?>
             <div class="Fukuoka-box">
            <h1>Fukuoka</h1>
           Fukuoka is the capital city of Fukuoka Prefecture, situated on the northern shore 
           of the Japanese island of Kyushu. It is the most populous city on the island, followed by Kitakyushu. 
           It is the largest city and metropolitan area west of Keihanshin. The city was designated on April 1,
           1972, by government ordinance. Greater Fukuoka, with a population of 2.5 million people (2005 census), is part
           of the heavily industrialized Fukuoka–Kitakyushu zone.
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>

