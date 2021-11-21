<?php
require("include/common.php");
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
        <div class="main">
           <?php
        include 'include/header.php';
        ?>
            <div class="links col-md-3 col-sm-6 home-feature">
                <a href="https://www.instagram.com/"><img src="img/instagram.png"></a>
                <a href="https://www.linkedin.com/"><img src="img/linkedin.png"></a>
                <a href="https://www.facebook.com/login.php"><img src="img/facebook.png"></a>
                <a href="https://twitter.com/?lang=en-in"><img src="img/twitter.png"></a>
            </div>
            <div class="booking-box-main">
                   <h1>Book Now</h1>
            <div class="textbox">
            <input type="text" class="form-control" placeholder="Number of bookings?"  required="required">        
            </div>
                <select>
                    <option>choose budget</option>
                    <option>Buisness class: $15,000 to $19,000 </option>
                    <option>Platinum class: $10,000 to $15,000</option>
                    <option>Gold class: $5,000 to $10,000 </option>
                    <option>Silver class: $3,000 to $5,000</option>
                    <option>Dimond class: $1,000 to $3,000</option>
                </select>
                <div class="textbox-o">
                    <label>Departure date:</label><input type="date" style=" color: white;" class="form-control" placeholder="departure date" required="required">
            </div>
            <div class="textbox-o">
                <label>Tripend date:</label> <input type="date" style=" color: white;" class="form-control" placeholder="tripend date" required="required">
            </div>
                <select class="desti" required="required">
                    <option>choose destination</option>
                    <option>africa</option>
                     <option>arctic</option>
                     <option>Antarctica</option>
                     <option>Alaska</option>
                     <option>Amazon</option>
                     <option>Australia</option>
                     <option>Adelaide</option>
                     <option>Bahamas</option>
                     <option>Canada</option>
                     <option>Cuba</option>
                     <option>Calgary</option>
                     <option>Dover</option>
                     <option>Dubai</option>
                     <option>Fukuoka</option>
                     <option>Greenwich</option>
                     <option>India</option>
                     <option>Koge</option>
                     <option>London</option>
                     <option>Mexico</option>
                     <option>Mombasa</option>
                     <option>Norway</option>
                     <option>Pacific Northwest</option>
                     <option>Paris</option>
                     <option>Russia</option>
                     <option>Rostock</option>
                     <option>Southern Africa</option>
                     <option>Southeast Asia</option>
                     <option>Tahiti</option>
                     <option>Toronto</option>
                     <option>Zurich</option>   
                </select>
                <select class="depar" required="required">
                    <option> departure ports</option>
                    <option>Aberdeen</option>
                     <option>Abu Dhabi</option>
                     <option>Acapulco</option>
                     <option>Adelaide</option>
                     <option>Agios Nikolaos</option>
                     <option>Ain Sokhna</option>
                     <option>Ajaccio</option>
                     <option>Alesund</option>
                     <option>Almeria</option>
                     <option>Amsterdam</option>
                     <option>Balboa</option>
                     <option>Bali</option>
                     <option>Barcelona</option>
                     <option>Bari</option>
                     <option>Belfast</option>
                     <option>Benoa</option>
                     <option>Bilbao</option>
                     <option>Bluff</option>
                     <option>Bridgetown</option>
                     <option>Bristol</option>
                     <option>Cagliari</option>
                     <option>Caldera</option>
                     <option>Calgary</option>
                     <option>Callao</option>
                     <option>Cannes</option>
                     <option>Cartagena</option>
                     <option>Darwin</option>
                     <option>Dover</option>
                     <option>Dubai</option>
                     <option>Dubrovnik</option>
                     <option>Durres</option>
                     <option>Dublin</option>
                     <option>Eden Island</option>
                     <option>Fairbanks</option>
                     <option>Fukuoka</option>
                     <option>Fujairah</option>
                     <option>Genoa</option>
                     <option>Glengariff</option>
                     <option>Greenwich</option>
                     <option>Hamburg</option>
                     <option>Harwich</option>
                     <option>Iquitos</option>
                     <option>Islay</option>
                     <option>King George Island</option>
                     <option>Koge</option>
                     <option>Larnaca</option>
                     <option>Lima</option>
                     <option>London</option>
                     <option>Los Angeles</option>
                     <option>Mombasa</option>
                     <option>Moscow</option>
                     <option>Palermo</option>
                     <option>Paris</option>
                     <option>Rostock</option>
                </select>  
                <a href="booknow.php"><input type="button" class="btn" value="go for booking"></a>
            </div>
        </div>
        <!--<div class="interior">
            <a href="xyz.php"><button class="button-int btn-primary btn-lg active"> Wanted to view Interiors of cruises!!!</button></a>
        </div>
        -->
        <h1 style="padding-left: 50px;"><b>Our Top Destinations</b></h1>
             <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="africa.php"><img src="img/africa.jpg" alt=""></a>
                        <div class="caption">
                            <a href="africa.php"><h3>Africa</h3></a>
                        </div>
                    </div>
                    </div>
 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="bahamas.php"><img src="img/bahamas.jpg" alt=""></a>
                        <div class="caption">
                            <a href="bahamas.php">  <h3>Bahamas</h3></a>
                        </div>
                        </div>
</div>



<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Dubai.php"><img src="img/Dubai.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Dubai.php"> <h3>Dubai</h3></a>
                        </div>
                        </div>
</div>

<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="view_more.php"><img src="img/Calgary.jpg" alt=""></a>
                        <div class="caption">
                            <a href="view_more.php"><input type="button" class="button1 btn-primary btn-lg active" value="view all destinations"></a>
                        </div>
                        </div>
</div>
       </div>
        <h1 style="padding-left: 50px;"><b>Our Cruises</b></h1>
        <div class="row text-center" id="line1">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="A-Rosa-Aqua.php"><img src="img/A-Rosa Aqua.jpg" alt=""></a>
                        <div class="caption">
                            <a href="A-Rosa-Aqua.php"><h3>A-Rosa Aqua</h3></a>
                        </div>
                    </div>
                    </div>
            <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="Adonia.php"><img src="img/Adonia.jpg" alt=""></a>
                        <div class="caption">
                            <a href="Adonia.php"><h3>Adonia</h3></a>
                        </div>
                    </div>
                    </div>
            <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="AIDAaura.php"><img src="img/AIDAaura.jpg" alt=""></a>
                        <div class="caption">
                            <a href="AIDAaura.php"><h3>AIDAaura</h3></a>
                        </div>
                    </div>
                    </div>
            <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <a href="allcruises.php"><img src="img/Carnival Conquest.jpg" alt=""></a>
                        <div class="caption">
                            <a href="allcruises.php"><input type="button" class="button1 btn-primary btn-lg active" value="view all cruises"></a>
                        </div>
                    </div>
                    </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>

