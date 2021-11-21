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
         <div class="Paris">
<?php
include ("include/header.php");
?>
             <div class="Paris-box">
            <h1>Paris</h1>
           Paris is located in northern central France, in a north-bending arc of the river Seine 
           whose crest includes two islands, the Île Saint-Louis and the larger Île de la Cité,
           which form the oldest part of the city. The river's mouth on the English Channel (La Manche)
           is about 233 mi (375 km) downstream from the city. The city is spread widely on both banks
           of the river. Overall, the city is relatively flat, and the lowest point is 35 m (115 ft)
           above sea level. Paris has several prominent hills, the highest of which is Montmartre at 130 m (427 ft).
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>


