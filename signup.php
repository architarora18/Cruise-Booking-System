<?php
require("include/common.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Destination Cruises</title>
    <link rel="stylesheet" href="style.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--       <script>
$(document).ready(function(){
  $("#submit").click(function(){
    alert("your profile created successfully :)");
  });
});
          
  </script> -->
  </head>
<body>
    <div class="signup"> 
         <div class="login-home">
              <a href="index.php"><img  class="logo" src="img/0.jpg"></a>
      </div>
<div class="signup-box">
  <h1>Signup</h1>
  <form  action="signup_script.php" method="POST">
  <div class="textbox" >
      <input type="text" placeholder="Full Name" class="form-control" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
  </div>
  
  <div class="textbox">
      <input type="text" placeholder="Contact" class="form-control" name="contact" required = "true">
  </div>
  
  <div class="textbox">
      <input type="text" placeholder="Address" class="form-control" name="address" required = "true">
  </div>
  
  <div class="textbox">
      <input type="text" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true">
  </div>

  <div class="textbox">
    <input type="password" placeholder="Password"  class="form-control" pattern=".{6,}" name="password" required= "true">
  </div>

      <input type="submit" id="submit" name="submit" class="btn" value="Signup">
   </form>
</div>
    </div>
    <?php
include ("include/footer.php");
?>
 </body>
</html>