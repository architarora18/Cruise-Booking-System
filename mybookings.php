<?php
require("include/common.php");

?>

<!DOCTYPE html>
<html lang="en">
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
    </head>
    <body>
    <div class="main-div">
           <?php
        include 'include/header.php';
        ?>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Bookings</th>
                            <th>Budget</th>
                            <th>Departure date</th>
                            <th>Trip end date</th>
                            <th>destination port</th>
                            <th>departure port</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include ("include/common.php");
                           

                            $query = mysqli_query($con,"SELECT * FROM booknow WHERE email='" . $_SESSION['email'] . "'");

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                                ?>
                            <tr>  
                                <td><?php echo $res['name']; ?></td>
                                <td><?php echo $res['email']; ?></td>
                                <td><?php echo $res['contact']; ?></td>
                                <td><?php echo $res['bookings']; ?></td>
                                <td><?php echo $res['budget']; ?></td>
                                <td><?php echo $res['ddate']; ?></td>
                                <td><?php echo $res['tdate']; ?></td>
                                <td><?php echo $res['desti']; ?></td>
                                <td><?php echo $res['depar']; ?></td>
                                <td><a id="delete" href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top"  title="DELETE"><i class="fa fa-trash"></i></a></td>                                
                            </tr>
                           
                        
                        <?php
                            }
                             ?>
                    </tbody>
                </table>
            </div>
        </div>  
    </div>
    </body>
</html>

