<?php

require("include/common.php");

$old_email = $_POST['old-email'];
$old_email = mysqli_real_escape_string($con, $old_email);

$new_email = $_POST['email'];
$new_email = mysqli_real_escape_string($con, $new_email);

$query = "SELECT email FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_email = $row['email'];

    if ($old_email == $orig_email) {
        $query = "UPDATE  users SET email = '" . $new_email . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=email Updated');
    } else
        header('location: settings.php?error=Wrong Old email');
?>