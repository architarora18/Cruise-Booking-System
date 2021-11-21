<?php
require("include/common.php");
 $ids = $_GET['id'];

 $deletequery = "delete from booknow where id = $ids";
  
 $query = mysqli_query($con,$deletequery);
 
 header('location: mybookings.php')
 ?>