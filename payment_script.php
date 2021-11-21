<?php

require("include/common.php");

  $firstname = $_POST['firstname'];
  $firstname = mysqli_real_escape_string($con, $firstname);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $state = $_POST['state'];
  $state = mysqli_real_escape_string($con, $state);

  $country = $_POST['country'];
  $country = mysqli_real_escape_string($con, $country);
  
  $zip = $_POST['zip'];
  $zip = mysqli_real_escape_string($con, $zip);
  
  $cardname = $_POST['cardname'];
  $cardname = mysqli_real_escape_string($con, $cardname);
  
  $cardnumber = $_POST['cardnumber'];
  $cardnumber = mysqli_real_escape_string($con, $cardnumber);
  
  $amount = $_POST['amount'];
  $amount = mysqli_real_escape_string($con, $amount);
  
  $expmonth = $_POST['expmonth'];
  $expmonth = mysqli_real_escape_string($con, $expmonth);
    
  $expyear = $_POST['expyear'];
  $expyear = mysqli_real_escape_string($con, $expyear);
  
  $cvv = $_POST['cvv'];
  $cvv = mysqli_real_escape_string($con, $cvv);
  $cvv = MD5($cvv);

    
    $user_registration_query =  "INSERT INTO payment (firstname,email,address,state,country,zip,cardname,cardnumber,amount,expmonth,expyear,cvv) VALUES ('$firstname','$email','$address','$state','$country','$zip','$cardname','$cardnumber','$amount','$expmonth','$expyear','$cvv')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    header('location: sucess.php');
  
?>
