<?php

if (isset($_POST["signup"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)!== false){
        header("location: ../pages/signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username)!== false){
        header("location: ../pages/signup.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email)!== false){
        header("location: ../pages/signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat)!== false){
        header("location: ../pages/signup.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email)!== false){
        header("location: ../pages/signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
}

else{
    header("location: ../pages/signup.php");
}