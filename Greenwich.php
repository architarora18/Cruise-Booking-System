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
         <div class="Greenwich">
       <?php
include ("include/header.php");
?>
             <div class="Greenwich-box">
            <h1>Greenwich</h1>
           Greenwich is notable for its maritime history and for giving its name to the Greenwich Meridian (0° longitude)
           and Greenwich Mean Time. The town became the site of a royal palace, the Palace of Placentia from the 15th century.
           The palace fell into disrepair during the English Civil War and was demolished to be replaced by the Royal Naval
           Hospital for Sailors, designed by Sir Christopher Wren and his assistant Nicholas Hawksmoor.
           These buildings became the Royal Naval College in 1873,and they remained a military education establishment until
           1998 when they passed into the hands of the Greenwich Foundation.
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>


