<?php 
    session_start();
    require 'includes/functions.inc.php';
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
    //Dinamikus css link (az url alapján hivatkozza be a hozzátartozó css-t, ha a link változik az elérési utat MEG KELL VÁLTOZTATNI)
    $stylesheets = [
        '/daniel/szakdolgozat/index.php' => [
            '/daniel/szakdolgozat/css/index.css',
        ],
        '/daniel/szakdolgozat/Picker.php' => [
            '/daniel/szakdolgozat/css/footer.css',
            '/daniel/szakdolgozat/css/picker.css',
        ],
        '/daniel/szakdolgozat/admin.php' => [
            '/daniel/szakdolgozat/css/select.css',
            '/daniel/szakdolgozat/css/admin.css',
            '/daniel/szakdolgozat/css/compb.css',
        ],
        '/daniel/szakdolgozat/complete_builds.php' => [
            '/daniel/szakdolgozat/css/footer.css',
            '/daniel/szakdolgozat/css/compb.css',
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
        <!-- Az ikonokhoz tartozó leírás a script importnál található -->
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
            if(CheckAdmin($conn)){
        ?>
            <li><a href="admin.php"><i class="fa-solid fa-toolbox"></i> Admin</a></li>
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
<!-- Home image -->
<section class="home"></section><br>
<!-- script -->
<script src="JavaScript/header.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Az iconok font Awesome-on keresztül működnek, ha a fontawesome.com -on megváltozik/törlődik a létrehozott "kit" az script src megszűnik létezni az ikonokkal együtt -->
<!-- Megoldás: Létre kell hozni egy új "kit-et" és az ahhoz kapott src-t kell behivatkozni ide: -->
<script src="https://kit.fontawesome.com/9ea544f381.js" crossorigin="anonymous"></script>
