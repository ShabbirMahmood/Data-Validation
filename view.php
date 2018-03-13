<?php
/**
 * Created by PhpStorm.
 * User: Shabbir Mahmood
 * Date: 07-Mar-18
 * Time: 6:46 PM
 */
session_start();
$db = mysqli_connect('localhost', 'root', '', 'data_validation_db');

$query = "SELECT * FROM data_tb";
$result = mysqli_query($db, $query);  //************ */

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['Email']);
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--    Datatable CDN-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" ></script>
</head>
<body>
<!--Nav Bar-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Online Registration</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Registration</a></li>
            <li><a href="admin.php?logout='1'"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>

    </div>
</nav>

<!--Data Table-->
<div class="container">
    <div class="col-sm-2"></div>
    <div class="col-8 ">
        <h2 id="h2">Registered List</h2>
        <hr />
        <div class="well">
            <table id="data_tb" class="display" cellspacing="0" width="100%">
                <thead>
                <!-- Header Row -->
                    <tr>
                        <th>Full Name</th>
                        <th>Roll No</th>
                        <th>Fathers Name</th>
                        <th>Birth Date</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Educational Qualification</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                while( $rows = mysqli_fetch_array($result))   // mysqli *** Spelling is important
                {
                    ?>
                    <tr>
                        <td><?php echo $rows['Full_Name']; ?></td>
                        <td><?php echo $rows['Roll_No']; ?></td>
                        <td><?php echo $rows['Fathers_Name']; ?></td>
                        <td><?php echo $rows['Birth_Date']; ?></td>
                        <td><?php echo $rows['Address']; ?></td>
                        <td><?php echo $rows['Email']; ?></td>
                        <td><?php echo $rows['Phone_No']; ?></td>
                        <td><?php echo $rows['Edu_Qua']; ?></td>


                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-2"></div>
</div>
    <br>
    <br>
</div>
</body>
<!-- Data Table -->
<script>
    $(document).ready(function() {
        $('#data_tb').DataTable();
    } );
</script>
</html>
