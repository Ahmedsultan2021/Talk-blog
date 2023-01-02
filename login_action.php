<?php
// array(2) { ["email"]=> string(13) "amr@gmail.com" ["ps"]=> string(4) "ssss" }
session_start();
require_once("classes.php");
$Email = htmlspecialchars(trim( $_POST["Email"]));
$password = $_POST["password"];
// var_dump($_POST);
$user = user::login($Email,md5($password));
// var_dump($user);
if ((empty($Email))) {
    header("location:login.php?error=empty_email");
}
elseif(empty($password))
{
    header("location:login.php?error=empty_pass");
}
elseif (!empty($user))
 {
    if ($user->role == "user") {
        $_SESSION["user"]= serialize($user);
        header("location:userHome.php");
    }
    elseif($user->role == "admin"){
        $_SESSION["user"]= serialize($user);
        header("location:admin.php");
    }
}
else{
    header("location:login.php?error=wrong_pass_or_email");
}


