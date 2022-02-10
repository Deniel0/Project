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
        <h2 class="active">Login</h2>
        <!-- Login Form -->
        <form action="includes/login.inc.php" method="post">
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
          <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
      </div>
    </div>
</body>
<?php
include_once 'footer.php';
?>