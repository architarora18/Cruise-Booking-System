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
         <div class="Tahiti">
<?php
include ("include/header.php");
?>
             <div class="Tahiti-box">
            <h1>Tahiti</h1>
           Tahiti is the highest and largest island in French Polynesia lying close to Mo'orea island. 
           It is located 4,400 kilometres (2,376 nautical miles) south of Hawaii, 7,900 km (4,266 nmi) 
           from Chile, 5,700 km (3,078 nmi) from Australia.[citation needed] The island is 45 km (28 mi)
           across at its widest point and covers an area of 1,045 km2 (403 sq mi). The highest peak is 
           Mont Orohena (Mou'a 'Orohena) (2,241 m (7,352 ft)).
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>


