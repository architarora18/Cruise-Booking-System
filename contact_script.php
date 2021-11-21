<?php

require("include/common.php");

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $message = $_POST['message'];
  $message = mysqli_real_escape_string($con, $message);
  
    $user_registration_query =  "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    header('location: index.php');
?>
