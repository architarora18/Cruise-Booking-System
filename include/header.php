<?php
require("include/common.php");
?>
<div class="navbar">
    <a href="index.php"><img  class="logo" src="img/0.jpg"></a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
    <ul class="nav navbar-nav navbar-right " id="mynavbar">
                    <li><a href="booknow.php">Book Now</a></li>
                    <li><a href="view_more.php">Destinations</a>
                        <ul>
                            <li><a href="africa.php">Africa</a></li>
                            <li><a href="antarctica.php">Antarctica</a></li>
                            <li><a href="alaska.php">Alaska</a></li>
                            <li><a href="amazon.php">Amazon</a></li>
                            <li><a href="arctic.php">Arctic</a></li>
                            <li><a href="australia.php">Australia</a></li>
                            <li><a href="bahamas.php">Bahamas</a></li>
                            <li><a href="Dubai.php">Dubai</a></li>
                            <li><a href="view_more.php">view more</a></li>
                        </ul>
                    </li>
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