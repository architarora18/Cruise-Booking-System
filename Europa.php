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
             <h1 style="color: white;">Europa</h1>
                 <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Europa.php"><img src="img/Europa.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Europa.php"><h3>Europa</h3></a>
                        </div>
                    </div>
                    </div>
                 </div>
                 <div class="cruise2">
                     <h2>Description</h2>
                <p>Completed in 1997, this Vision class cruise ship holds cruises concentrating 
                    on the Caribbean regions all-year-round. While its one of the oldest vessels 
                    owned by the Royal Caribbean International company, it underwent major makeover
                    in 2005, making it one of the most attractive vessels now for families who are
                    traveling together.</p>
                 </div>
                 <div class="cruise3">
                     <h2>Ship Summary</h2>
                     <p>Operator:	Royal Caribbean International<br>
                         Built by:	Kvaerner Masa Yards Helsinki New Shipyard, Helsinki, Finland<br>
                         Date Completed:	1997<br>
                         Gross Tonnage:	80500<br>
                         Length:	301.75 m<br>
                         Width:	32.31 m<br>
                         Decks:	11<br>
                         Passengers:	2730<br>
                         Crew:	1200</p>
                 </div>
             </div>
         </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>
