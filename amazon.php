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
         <div class="amazon">
<?php
include ("include/header.php");
?>
             <div class="amazon-box">
            <h1>AMAZON</h1>
        The Amazon rainforest alternatively, the Amazon Jungle, also known in English as Amazonia, is a moist broadleaf tropical
        rainforest in the Amazon biome that covers most of the Amazon basin of South America. This basin encompasses 7,000,000 km2
        (2,700,000 sq mi) of which 5,500,000 km2 (2,100,000 sq mi) are covered by the rainforest. This region includes territory belonging to nine nations.
        <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
