<?php
    include_once 'html_header.php';
    require 'includes/db.includes.php';
    require_once 'includes/signup.inc.php';
?>
<head>
<link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">Sign Up</h2>
        <!-- Login Form -->
        <form action="includes/signup.inc.php" method="post" >
          <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Sign Up" name="submit">
        </form>
      </div>
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
</body>

<?php
  include_once 'footer.php';
?>