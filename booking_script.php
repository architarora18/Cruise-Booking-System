<?php

require("include/common.php");

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $bookings = $_POST['bookings'];
  $bookings = mysqli_real_escape_string($con, $bookings);

  $budget = $_POST['budget'];
  $budget = mysqli_real_escape_string($con, $budget);
  
  $ddate = $_POST['ddate'];
  $ddate = mysqli_real_escape_string($con, $ddate);
  
  $tdate = $_POST['tdate'];
  $tdate = mysqli_real_escape_string($con, $tdate);
  
  $desti = $_POST['desti'];
  $desti = mysqli_real_escape_string($con, $desti);
  
  $depar = $_POST['depar'];
  $depar = mysqli_real_escape_string($con, $depar);

    
    $user_registration_query =  "INSERT INTO booknow (name,email,contact,bookings,budget,ddate,tdate,desti,depar) VALUES ('$name','$email','$contact','$bookings','$budget','$ddate','$tdate','$desti','$depar')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    header('location: payment.php');
  
?>