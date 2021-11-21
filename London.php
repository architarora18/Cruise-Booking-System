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
         <div class="London">
<?php
include ("include/header.php");
?>
             <div class="London-box">
            <h1>London</h1>
           London is the capital and largest city of England and the United Kingdom.The city stands on
           the River Thames in the south-east of England, at the head of its 50-mile (80 km) estuary leading 
           to the North Sea. London has been a major settlement for two millennia. Londinium was founded by the Romans.
           The City of London, London's ancient core and financial centre − an area of just 1.12 square miles (2.9 km2)
           and colloquially known as the Square Mile − retains boundaries that closely follow its medieval limits
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>


