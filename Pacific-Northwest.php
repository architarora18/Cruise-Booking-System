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
         <div class="Pacific-Northwest">
<?php
include ("include/header.php");
?>
             <div class="Pacific-Northwest-box">
            <h1>Pacific Northwest</h1>
           The Northwest is still highly geologically active, with both active volcanoes and geologic faults.
           Active volcanoes in the region include Mount Garibaldi, Mount Baker, Mount Rainier, 
           Mount St. Helens, Mount Hood, Mount Meager, Mount Jefferson, Mount Shasta, and Glacier Peak.
           <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>


