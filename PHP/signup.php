<?php
    require 'includes/db.includes.php';
    include_once 'html_header.php';
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
        <form action="includes/signup.inc.php" method="post">
          <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Sign Up">
        </form>
      </div>
    </div>
</body>
<?php
  include_once 'footer.php';
?>