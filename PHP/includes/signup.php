<?php
    include_once 'db.includes.php';
    include_once 'html_header.php';
?>
<section>
        <h2 class="sign-up"> Sign Up </h2>
        <form action="signup.inc.php" method="POST">
          <input type="text" name="Username" placeholder="Username">
          <input type="password" name="Password" placeholder="Password">
          <button type="submit">Sign Up</button>
        </form>
      </div>
</section>




<?php
include_once 'footer.php';
?>