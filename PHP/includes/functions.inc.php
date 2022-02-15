<?php
function emptyInputSignup($username, $password){
    $result=false;
    if (empty($username) || (empty($password) )) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidUsername($username){
    $result=false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function userexist($conn, $username){
    $result=false;
    $sql ="SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=usernameistaken");
        exit();
    }
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
}
function createUser($conn, $username, $password){
    $sql ="INSERT INTO users (username, pwd) VALUES(?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ss", $username, $hashedpwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none");
        exit();
}
function emptyInputLogin($username, $password){
    $result=false;
    if (empty($username) || (empty($password) )) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginUser($conn, $username, $password){
    $userexist = userexist($conn, $username);
    if ($userexist === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $userexist["pwd"];
    $checkPwd = password_verify($password, $pwdHashed);
    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    elseif ($checkPwd === true) {
        session_start();
        $_SESSION["username"] = $userexist["username"];
        $_SESSION["username"] = $userexist["username"];
        header("location: ../index.php?error=ok");
        exit();
    }
}
?>