<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!--Nav Bar-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Online Registration</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Registration</a></li>
            <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
        </ul>
    </div>
</nav>
<br>
<br>
<!--Jumbo Tron-->
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Welcome!</h1>
        <p class="lead">You can register here</p>
        <hr class="my-4">
        <p>Click here for registration</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="register.php" role="button">Register</a>
        </p>
    </div>
</div>

</body>
</html>
