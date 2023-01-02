<?php

session_start();
require_once("classes.php");
$user =  unserialize($_SESSION["user"]);
$body = htmlspecialchars( trim($_POST["body"]));
$title = htmlspecialchars( trim($_POST["title"]));
$file_name = "images/posts/".date("YmdHis").".".PATHINFO_EXTENSION;
$user_id = $user->id;
move_uploaded_file($_FILES["image"]["tmp_name"],$file_name);
// var_dump($_POST);
if (empty($body)||empty($title)||empty($file_name)) 
{
    header("location:profile.php?erorr=empty_field");
}
else{

    $rslt = $user->Createpost($title,$body,$file_name,$user_id);
    header("location:profile.php?done");
} 