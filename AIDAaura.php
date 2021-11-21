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
         <div class="cruise">
             <div class="cruise1">
<?php
include ("include/header.php");
?>
             <h1 style="color: white;">AIDAaura</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="AIDAaura.php"><img src="img/AIDAaura.jpg" alt=""></a>
                        <div class="caption">
                            <a href="AIDAaura.php"><h3>AIDAaura</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>The AIDAaura is sister ship to the AIDAvita and has similar facilities and 
                    layout, including three restaurants, five bars and over 3000 square metres 
                    of sun decks. The AIDA body and soul SPA is over a thousand square metres in 
                    area. The language onboard is German, so it is handy to brush up on useful 
                    German phrases before travelling with this ship.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	AIDA Cruises<br>
Built by:	Aker, MTW, Wismar<br>
Date Completed:	2003<br>
Gross Tonnage:	42289<br>
Length:	202.84 m<br>
Width:	28.09 m<br>
Decks:	10<br>
Passengers:	1266<br>
Crew:	426</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
