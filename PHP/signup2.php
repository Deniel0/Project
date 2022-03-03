<?php
    include_once 'log.sig.header.php';
    require 'includes/db.includes.php';
    require_once 'includes/signup.inc.php';
?>
<head>
  <link rel="stylesheet" href="css/login2.css">
</head>
<body>
    <div class="form-container">
<div class="wrapper">
    <header>Signup</header>
    <form action="includes/signup.inc.php" method="post">
      <div class="field">
        <div class="input-area">
          <input type="text" name="username" placeholder="Username" required>
          <i class="icon fas fa-envelope"></i>
        </div>
      </div>
      <div class="field">
        <div class="input-area">
          <input type="password" name="password" placeholder="Password" required>
          <i class="icon fas fa-lock"></i>
        </div>
      </div>
      <input type="submit" name="submit" value="Signup">
    </form>
    <div class="sign-txt">You already have an account? <a href="login2.php">Login</a></div>
    <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Fill in all fields!</p>";
    }
    else if($_GET["error"] == "invalidUsername"){
      echo "<p>Invalid username!</p>";
    }
    else if($_GET["error"] == "invalidPassword"){
      echo "<p>Invalid password!</p>";
    }
    else if($_GET["error"] == "stmtfailed"){
      echo "<p>Something went wrong!</p>";
    }
    else if($_GET["error"] == "usernameistaken"){
      echo "<p>Username is already taken!</p>";
    }
    else if($_GET["error"] == "none"){
      echo "<p>You have signed up!</p>";
    }
  }
?>
  </div>
  </div>
</body>