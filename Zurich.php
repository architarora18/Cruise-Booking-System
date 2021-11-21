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
         <div class="Zurich">
<?php
include ("include/header.php");
?>
             <div class="Zurich-box">
            <h1>Zurich</h1>
          Zürich is situated at 408 m (1,339 ft) above sea level on the lower
          (northern) end of Lake Zürich (Zürichsee) about 30 kilometers (19 mi)
          north of the Alps, nestling between the wooded hills on the west and 
          east side. The Old Town stretches on both sides of the Limmat, which flows 
          from the lake, running northwards at first and then gradually turning 
          into a curve to the west. The geographic (and historic) centre of the
          city is the Lindenhof, a small natural hill on the west bank of the Limmat,
          about 700 m (2,300 ft) north of where the river issues from Lake Zürich.
          <a href="booknow.php"><button class="btn btn-danger btn-lg active">Book my cruise</button></a>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>


