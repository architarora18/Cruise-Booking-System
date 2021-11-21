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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script>
$(document).ready(function(){
  $("#logout").click(function(){
    alert("You would get signout now.\n\ THANK YOU for visiting are website :)");
  });
});
          
  </script>
        <style>
.profile{
    width: 100%;
    height: 91vh;
    background-image: url(img/bg6.jpg);
    background-size: cover;
    background-position: center;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  padding-top: 80px;
   background: #A9A9A9; 
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover, a:hover {
  opacity: 0.7;
}
        </style>
    </head>
    <body>
        <div class="profile">
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
   <div class="card">
       <img src="img/account.png" alt="John" style=" width: 150px" >
       <?php
                            include ("include/common.php");
                            $query = mysqli_query($con,"SELECT * FROM users WHERE email='" . $_SESSION['email'] . "'");

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
        ?>
                            <h1><?php echo $res['name'];} ?></h1>
       <a href="settings.php"><p><button>Settings</button></p></a>
       <a href="mybookings.php"><p><button>My bookings</button></p></a>
       <a href="xyz.php"><p><button>Cruise Interiors</button></p></a>
       <a href="logout.php" id="logout"><p><button>logout</button></p></a>
</div>
        </div>
        <?php
                            
        include 'include/footer.php';
        ?>
    </body>
</html>