<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    require_once 'db.includes.php';
    require_once 'functions.inc.php';
    if (emptyInputLogin($username, $password) != false) {
        echo 'ures';
        header("location: ../login2.php?error=emptyinput");
        exit();
    }
    if (loginUser($conn, $username, $password) != false) {
        header("location: ../index.php");
        exit();
    }
    loginUser($conn, $username, $password);
    }
?>