<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    require_once 'db.includes.php';
    require_once 'functions.inc.php';
    
    if (emptyInputSignup($username, $password) == true) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($username) != false) {
        header("location: ../signup.php?error=invalidUsername");
        exit();
    }
    if (userexist($conn, $username, $password) != false) {
        header("location: ../signup.php?error=usernameistaken");
        exit();
    }
    createUser($conn, $username, $password);
    }
    /*else{
        header("location: signup.php");
        exit();
}*/
?>
