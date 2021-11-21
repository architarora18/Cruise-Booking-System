<?php
require("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
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
        <div class="booking">
             <div class="navbar">
                <a href="index.php"><img  class="logo" src="img/0.jpg"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <?php
                if (isset($_SESSION['email'])) {
                    ?>
                      <li><a href="profile.php">Profile</a></li>
                    
                    <?php
                } else {
                    ?>
                    <li><a href="login.php">login</a></li>
                    <li><a href="signup.php">signup</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <form action="booking_script.php" method="POST" >
            <div class="booking-box">
                <h1>Book Now</h1>
            <div class="textbox">
                <input type="text" class="form-control" placeholder="Full Name" name="name" required="required">        
            </div>
            <div class="textbox">
            <input type="text" class="form-control" placeholder="email" name="email" required="required">        
            </div>
            <div class="textbox">
            <input type="text" class="form-control" placeholder="contact" name="contact" required="required">        
            </div>
            <div class="textbox">
            <input type="text" class="form-control" placeholder="Number of bookings?" name="bookings"  required="required">        
            </div>
                <select name="budget" required="required">
                    <option>choose budget</option>
                    <option value="buisness">Buisness class: $15,000</option>
                    <option value="platinum">Platinum class: $10,000</option>
                    <option value="gold">Gold class: $5,000</option>
                    <option value="silver">Silver class: $3,000</option>
                    <option value="diamond">Diamond class: $1,000</option>
                </select>
                <div class="textbox-o">
                    <label>Departure date:</label><input type="date" name="ddate" class="form-control" placeholder="departure date" required="required">
            </div>
            <div class="textbox-o">
                <label>Tripend date:</label> <input type="date" name="tdate" class="form-control" placeholder="tripend date" required="required">
            </div>
                <select class="desti" name="desti" required="required">
                    <option>choose destination</option>
                    <option value="africa">africa</option>
                     <option value="arctic">arctic</option>
                     <option value="Antarctica">Antarctica</option>
                     <option value="Alaska">Alaska</option>
                     <option value="Amazon">Amazon</option>
                     <option value="Australia">Australia</option>
                     <option value="Adelaide">Adelaide</option>
                     <option value="Bahamas">Bahamas</option>
                     <option value="Canada">Canada</option>
                     <option value="Cuba">Cuba</option>
                     <option value="Calgary">Calgary</option>
                     <option value="Dover">Dover</option>
                     <option value="Dubai">Dubai</option>
                     <option value="Fukuoka">Fukuoka</option>
                     <option value="Greenwich">Greenwich</option>
                     <option value="India">India</option>
                     <option value="Koge">Koge</option>
                     <option value="London">London</option>
                     <option value="Mexico">Mexico</option>
                     <option value="Mombasa">Mombasa</option>
                     <option value="Norway">Norway</option>
                     <option value="Pacific Northwest">Pacific Northwest</option>
                     <option value="Paris">Paris</option>
                     <option value="Russia">Russia</option>
                     <option value="Rostock">Rostock</option>
                     <option value="Southern Africa">Southern Africa</option>
                     <option value="Southeast Asia">Southeast Asia</option>
                     <option value="Tahiti">Tahiti</option>
                     <option value="Toronto">Toronto</option>
                     <option value="Zurich">Zurich</option>   
                </select>
                <select class="depar" name="depar" required="required">
                    <option> departure ports</option>
                    <option value="Aberdeen">Aberdeen</option>
                     <option value="Abu Dhabi">Abu Dhabi</option>
                     <option value="Acapulco">Acapulco</option>
                     <option value="Adelaide">Adelaide</option>
                     <option value="Agios Nikolaos">Agios Nikolaos</option>
                     <option value="Ain Sokhna">Ain Sokhna</option>
                     <option value="Ajaccio">Ajaccio</option>
                     <option value="Alesund">Alesund</option>
                     <option value="Almeria">Almeria</option>
                     <option value="Amsterdam">Amsterdam</option>
                     <option value="Balboa">Balboa</option>
                     <option value="Bali">Bali</option>
                     <option value="Barcelona">Barcelona</option>
                     <option value="Bari">Bari</option>
                     <option value="Belfast">Belfast</option>
                     <option value="Benoa">Benoa</option>
                     <option value="Bilbao">Bilbao</option>
                     <option value="Bluff">Bluff</option>
                     <option value="Bridgetown">Bridgetown</option>
                     <option value="Bristol">Bristol</option>
                     <option value="Cagliari">Cagliari</option>
                     <option value="Caldera">Caldera</option>
                     <option value="Calgary">Calgary</option>
                     <option value="Callao">Callao</option>
                     <option value="Cannes">Cannes</option>
                     <option value="Cartagena">Cartagena</option>
                     <option value="Darwin">Darwin</option>
                     <option value="Dover">Dover</option>
                     <option value="Dubai">Dubai</option>
                     <option value="Dubrovnik">Dubrovnik</option>
                     <option value="Durres">Durres</option>
                     <option value="Dublin">Dublin</option>
                     <option value="Eden Island">Eden Island</option>
                     <option value="Fairbanks">Fairbanks</option>
                     <option value="Fukuoka">Fukuoka</option>
                     <option value="Fujairah">Fujairah</option>
                     <option value="Genoa">Genoa</option>
                     <option value="Glengariff">Glengariff</option>
                     <option value="Greenwich">Greenwich</option>
                     <option value="Hamburg">Hamburg</option>
                     <option value="Harwich">Harwich</option>
                     <option value="Iquitos">Iquitos</option>
                     <option value="Islay">Islay</option>
                     <option value="King George Island">King George Island</option>
                     <option value="Koge">Koge</option>
                     <option value="Larnaca">Larnaca</option>
                     <option value="Lima">Lima</option>
                     <option value="London">London</option>
                     <option value="Los Angeles">Los Angeles</option>
                     <option value="Mombasa">Mombasa</option>
                     <option value="Moscow">Moscow</option>
                     <option value="Palermo">Palermo</option>
                     <option value="Paris">Paris</option>
                     <option value="Rostock">Rostock</option>
                </select>  
                <h6>* your cruise would be alloted ahead</h6>
               <input type="submit" class="btn" value="go for payment">
            </div>
            </form>
        </div>
        <?php
include ("include/footer.php");
?>
    </body>
</html>