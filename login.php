<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Destination Cruises</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="login">
          <div class="login-home">
              <a href="index.php"><img  class="logo" src="img/0.jpg"></a>
      </div>
<div class="login-box">
  <h1>Login</h1>
  <form action="login_submit.php" method="POST">
  <div class="textbox">
    <input type="text" class="form-control" placeholder="Email" name="email" required = "true">
  </div>

  <div class="textbox">
    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
  </div>

      <input  type="submit" id="submit" name="submit" class="btn" value="Sign in">
  don't have any account? <a href="signup.php" class="register">register</a>.
  </form>
</div>
       </div>
 <?php
include ("include/footer.php");
?>
  </body>
</html>