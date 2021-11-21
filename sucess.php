<?php
require("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Destination Cruises</title>
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
                <div class="sucess">
<?php
include ("include/header.php");
?>
                    <h4 style="padding-top: 200px; padding-left: 10px; color: white; font-size: 50px;">Your payment is sucessfull</h4>
                    <p style="padding-left: 10px; color: white; font-size: 40px;">Thank you for visting our website</p>
                    <p style="padding-left: 10px; padding-top: 150px; color: black; font-size: 40px;">YOUR CRUISE WILL BE ALLOTED AT<BR> THE DEPARTURE PORT</p>
                    <p style="padding-left: 10px; color: white; font-size: 20px;"><a href="index.php">click here to view the home page</a></p>
        </div>
<?php
include ("include/footer.php");
?>
    </body>
</html>
