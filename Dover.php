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
         <div class="Dover">
        <?php
include ("include/header.php");
?>
             <div class="Dover-box">
            <h1>Dover</h1>
           Dover is a town and major ferry port in Kent, South East England. 
           It faces France across the Strait of Dover, the narrowest part of the English Channel
           , and lies south-east of Canterbury and east of Maidstone. The town is the administrative 
           centre of the Dover District and home of the Port of Dover. The surrounding chalk cliffs are known as the White Cliffs of Dover.
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>

