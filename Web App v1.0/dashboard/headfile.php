<!--HTML document to define the layout of the head and the navigation bar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!--<title>Starter Template - Materialize</title> -->

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo"><img width="70" height="65" src=images/workedup_logo.png></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register Resources</a></li>
            <li><a href="dispLeaderboard.php">Leader Board</a></li>
            <li><a href="validateform.php">Verify Volunteerism</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register Resources</a></li>
            <li><a href="dispLeaderboard.php">Leader Board</a></li>
            <li><a href="validateform.php">Verify Volunteerism</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<h5 class="center"><a><?php date_default_timezone_set('Asia/Colombo'); echo date('d F Y ');?></a></h5>

