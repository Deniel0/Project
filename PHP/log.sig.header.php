<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Title icon -->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <title>Partpicker</title>
  <!-- css links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="css/header2.css">
  <?php 
$stylesheets = [
    '/daniel/szakdolgozat/signup2.php' => [
        '/daniel/szakdolgozat/css/login2.css',
    ],
    '/daniel/szakdolgozat/login2.php' => [
        '/daniel/szakdolgozat/css/login2.css',
    ],
];
    foreach($stylesheets[$_SERVER['PHP_SELF']] as $file) {
        echo "<link rel='stylesheet' type='text/css' href='$file'>\n";
    }
?>
</head>
<body>
<!-- navbar -->
<nav class="nav">
    <div class="hamburger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <ul class="navlinks">
        <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
        <li><a href="Picker.php"><i class="fa-solid fa-puzzle-piece"></i> Picker</a></li>
        <li><a href="complete_builds.php"><i class="fa-solid fa-desktop"></i> Complete Builds</a></li>
        <?php 
            if(!isset($_SESSION['username'])){
        ?>
            <li><a href="login2.php"><i class="fa-solid fa-right-to-bracket"></i> Log in</a></li>
            <li><a href="signup2.php"><i class="fa-solid fa-user-plus"></i> Sign up</a></li>
        <?php 
            }
        ?>
        <?php 
            if(isset($_SESSION['username'])){
        ?>
            <li><a href="includes/logout.php"><i class="fa-solid fa-power-off"></i> Log out</a></li>
            <li class="profil"><i class="fa-solid fa-user"> </i><?php echo " ". $_SESSION['username'] ?></li>
        <?php 
            }
        ?>
    </ul>
</nav>
<!-- script -->
<script src="JavaScript/header.js"></script>
<script src="https://kit.fontawesome.com/9ea544f381.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>