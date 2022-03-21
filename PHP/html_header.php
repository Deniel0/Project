<?php 
session_start();
?>
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Title -->
  <title>Partpicker</title>
  <!-- Title icon -->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <!-- css links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/header2.css">
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
            <!-- <a href="#jump" onclick="window.open('Picker.php');"><i class="fa-solid fa-puzzle-piece"></i> Picker</a> -->
            <li><a href="complete_builds.php"><i class="fa-solid fa-desktop"></i> Complete Builds</a></li>
            <?php 
                    if(!isset($_SESSION['username'])){
                ?>
                <li><a href="login2.php"><i class="fa-solid fa-right-to-bracket"></i> Log in</a></li>
                <!-- <li><a href="signup.php"><i class="fa-solid fa-user-plus"></i> Sign up</a></li> -->
                <li><a href="signup2.php"><i class="fa-solid fa-user-plus"></i> Sign up</a></li>
                <?php 
                    }
                ?>
                <?php 
                    if(isset($_SESSION['username'])){
                ?>
                <li><a href="includes/logout.php"><i class="fa-solid fa-power-off"></i> Log out</a></li>
                <?php 
                    }
                ?>
        </ul>
</nav>
<!-- Home image -->
<section class="home"></section><br>
<!-- script -->
<script src="JavaScript/header.js"></script>
<script src="https://kit.fontawesome.com/9ea544f381.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
<?php 
    if(isset($_SESSION['username'])){
?>

<?php 
    }
?>