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
         <div class="India">
       <?php
include ("include/header.php");
?>
             <div class="India-box">
            <h1>India</h1>
           India (Bharat), officially the Republic of India is a country in South Asia. It is the second-most populous country, 
           the seventh-largest country by land area, and the most populous democracy in the world. Bounded by the Indian Ocean
           on the south, the Arabian Sea on the southwest, and the Bay of Bengal on the southeast, it shares land borders 
           with Pakistan to the west; China, Nepal, and Bhutan to the north; and Bangladesh and Myanmar to the east.
           In the Indian Ocean, India is in the vicinity of Sri Lanka and the Maldives; its Andaman and Nicobar Islands 
           share a maritime border with Thailand and Indonesia.
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>


