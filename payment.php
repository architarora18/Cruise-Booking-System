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
        <link rel="stylesheet" href="payment-style.css" type="text/css">
</head>
<body>
<h2>Proceed for Payment</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
        <form action="payment_script.php" method="POST" >
        <div class="row">
          <div class="col-50">
            <h3>Payment Information</h3>
            <label> Full Name</label>
            <input type="text"  name="firstname" placeholder="Archit Arora" required="true">
            <label> Email</label>
            <input type="text"  name="email" placeholder="archit@example.com" required="true">
            <label> Address</label>
            <input type="text"  name="address" placeholder="804, phase-4 ,SAS Nagar ,Mohali" required="true">
            <label> State</label>
            <input type="text"  name="state" placeholder="punjab" required="true">

            <div class="row">
              <div class="col-50">
                <label>country</label>
                <input type="text" name="country" placeholder="India" required="true">
              </div>
              <div class="col-50">
                <label>Zip</label>
                <input type="text" name="zip"  placeholder="160059" required="true">
              </div>
            </div>
          </div>
            
          <div class="col-50">
            <h3>Payment</h3>
            <label>All Cards Accepted here</label>
            <label>Name on Card</label>
            <input type="text" name="cardname" placeholder="Archit Arora" required="true">
            <label>Credit card number</label>
            <input type="text" name="cardnumber" placeholder="1111-2222-3333-4444" required="true">
            <label>Amount</label>
            <input type="text" name="amount" placeholder="Eg-5000$" required="true">
            <label>Exp Month</label>
            <input type="text" name="expmonth"  placeholder="Month" required="true">
            <div class="row">
              <div class="col-50">
                <label>Exp Year</label>
                <input type="text" name="expyear" placeholder="YYYY" required="true">
              </div>
              <div class="col-50">
                <label>CVV</label>
                <input type="password" name="cvv"  placeholder="***" maxlength="3" required="true">
              </div>
            </div>
          </div>
        </div>
            <button type="submit" class="btn1">CONFIRM PAYMENT</button>
          </form>
    </div>
  </div>
</div>
<?php
include ("include/footer.php");
?>
</body>
</html>
