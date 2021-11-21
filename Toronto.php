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
         <div class="Toronto">
<?php
include ("include/header.php");
?>
             <div class="Toronto-box">
            <h1>Toronto</h1>
           Toronto covers an area of 630 square kilometres (243 sq mi), with a maximum north–south
           distance of 21 kilometres (13 mi) and a maximum east–west distance of 43 km (27 mi).
           It has a 46-kilometre (29 mi) long waterfront shoreline, on the northwestern shore of 
           Lake Ontario. The Toronto Islands and Port Lands extend out into the lake, allowing for
           a somewhat sheltered Toronto Harbour south of the downtown core. An Outer Harbour 
           was constructed south east of downtown and it's now used for recreation. 
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>


