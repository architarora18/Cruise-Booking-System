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
         <div class="Canada">
        <?php
include("include/header.php");
?>
             <div class="Canada-box">
            <h1>CANADA</h1>
           Canada is a country in the northern part of North America. 
           Its ten provinces and three territories extend from the Atlantic to the Pacific 
           and northward into the Arctic Ocean, covering 9.98 million square kilometres (3.85 million square miles),
           making it the world's second-largest country by total area. Its southern and western border with the United States, 
           stretching 8,891 kilometres (5,525 mi), is the world's longest bi-national land border. Canada's capital is Ottawa,
           and its three largest metropolitan areas are Toronto, Montreal, and Vancouver.
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>

