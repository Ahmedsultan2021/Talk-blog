<?php
var_dump($_POST);
session_start();
require_once("classes.php");
$user =  unserialize($_SESSION["user"]);
$body = htmlspecialchars( trim($_POST["newbody"]));
$title = htmlspecialchars( trim($_POST["newtitle"]));
$post_id = htmlspecialchars( trim($_POST["post_id"]));
// $file_name = "images/posts/".date("YmdHis").".".PATHINFO_EXTENSION;
$user_id = $user->id;
// move_uploaded_file($_FILES["image"]["tmp_name"],$file_name);
// var_dump($_POST);
if (empty($body)||empty($title)) 
{
    header("location:profile.php?erorr=empty_field");
}
else{

    $rslt = $user->updatepost($post_id,$title,$body,$user_id);
    header("location:profile.php?done");
}