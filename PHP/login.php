<?php
    include_once 'db.includes.php';
    include_once 'html_header.php';
?>
<head>
<link rel="stylesheet" href="html_css/login.css">
</head>
<body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Sign In </h2>
        <!-- Login Form -->
        <form>
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
          <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
      </div>
    </div>
</body>
<?php
include_once 'footer.php';
?>