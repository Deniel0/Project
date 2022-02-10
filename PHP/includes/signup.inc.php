<?php
if (isset($_POST["submit"])) {

    $username = $_POST["usern"];
    $password = $_POST["pwd"];

    require_once 'db.includes.php';
    require_once 'functions.php';

    if (emptyInputSignup($username, $password) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUsern($username) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidPwd($password) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    

} else {
    header("location: ../signup.php");
}
createUser($username, $password)

?>
