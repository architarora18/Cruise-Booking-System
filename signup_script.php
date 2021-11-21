<?php

require("include/common.php");

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

  $select_query = "SELECT * FROM users WHERE email='$email'";
  $select_query_result = mysqli_query($con, $select_query)or die($mysqli_error($con));
  $select_rows = mysqli_num_rows($select_query_result);
  
  if ($select_rows!= 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else {
    
    $user_registration_query =  "INSERT INTO users (name,contact,address,email,password) VALUES ('$name','$contact','$address','$email','$password')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: index.php');
  }
?>