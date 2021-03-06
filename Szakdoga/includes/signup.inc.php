<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    require_once 'db.includes.php';
    require_once 'functions.inc.php';
    
    if (emptyInputSignup($username, $password) != false) {
        header("location: ../signup2.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($username) != false) {
        header("location: ../signup2.php?error=invalidUsername");
        exit();
    }
    if (userexist($conn, $username, $password) != false) {
        header("location: ../signup2.php?error=usernameistaken");
        exit();
    }
    if (createUser($conn, $username, $password) != false) {
        header("location: ../index.php");
        exit();
    }
    }
?>
