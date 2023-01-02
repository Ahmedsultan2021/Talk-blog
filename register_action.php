<?php

// var_dump($_POST);

// array(6) { ["name"]=> string(12) "Ahmed sultan" ["Email"]=> string(28) "ahmedsultan4277892@gmail.com" ["password"]=> string(6) "123456" ["conPassword"]=> string(6) "123456" ["mobile"]=> string(11) "01272638173" ["gender"]=> string(4) "male" }
session_start();
#validation
$errors = [];
if (empty($_POST["name"])) $errors['name'] = "Name Is required";
if (empty($_POST["Email"])) $errors['Email'] = "Email Is required";
if (empty($_POST["password"])) $errors['password'] = "password Is required";
else if($_POST["password"]!=$_POST["conPassword"])
{
    $errors['conPassword'] = "password And confirmation password Not equal";
}  

# code...
#filteration
$name = filter_var(trim($_POST["name"]),FILTER_SANITIZE_SPECIAL_CHARS);
$Email = filter_var(trim($_POST["Email"]),FILTER_SANITIZE_EMAIL);
$password =htmlspecialchars($_POST["password"]);
$conPassword =htmlspecialchars($_POST["conPassword"]);
$mobile = filter_var($_POST["mobile"],FILTER_SANITIZE_NUMBER_INT);
$gender = htmlspecialchars($_POST["gender"]);



if (empty($errors)) {
    try {
        $password = md5($password);
        $qry = "insert into blog.users(`name`, `Email`, `mobile`, `password`, `gender`) values ('$name','$Email','$mobile','$password','$gender')";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        // echo mysqli_error($cn);
        // var_dump($rslt);
        mysqli_close($cn);
        if ($rslt) {
            header("Location:login.php");
        }
    } catch (\Throwable $th) {
        $errors['alreadyE'] = "already Existed account";
        $_SESSION["errors"] = $errors;
        header("Location:register.php");
    }
}
else {
    $_SESSION["errors"] = $errors;
    header("Location:register.php");
}

//validation




//filteration


