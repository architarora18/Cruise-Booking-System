<?php
require_once("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Destination Cruises</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body> 
<div class="setting">
<div class="navbar">
                <a href="index.php"><img  class="logo" src="img/0.jpg"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="booknow.php">Book Now</a></li>
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
      <h1>SETTINGS</h1>
<div class="setting-box">
    <h3>Change Password</h3>
  <form action="password_script.php" method="POST">
  <div class="textbox" >
      <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
  </div>
  
  <div class="textbox">
      <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
  </div>
  
  <div class="textbox">
      <input type="password" class="form-control" name="password1"  placeholder="Confirm New Password" required = "true">
  </div>
      <p style="color: white;">*Note-:after updating information please login again</p>

  <button type="submit" class="btn btn-primary">Change</button>
   </form>
</div>
      <div class="setting1-box">
    <h3>Change Email</h3>
  <form action="email_script.php" method="POST">
  <div class="textbox" >
      <input type="text" class="form-control" name="old-email"  placeholder="Old Email" required = "true">
  </div>
  
  <div class="textbox">
      <input type="text" class="form-control" name="email" placeholder="New Email" required = "true">
  </div>
<p style="color: white;">*Note-:after updating information please login again</p>
  <button type="submit" class="btn btn-primary">Change</button>
   </form>
</div>

</div>
        <?php include("include/footer.php"); ?>
    </body>
</html>