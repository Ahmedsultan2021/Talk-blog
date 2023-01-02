<?php

session_start();
require_once("classes.php");
$user =  unserialize($_SESSION["user"]);
$post_id = $_GET["post_id"];
$comment = $_GET["comment"];
$user_id = $user->id;
var_dump($user_id);
var_dump($_GET);
if (empty($post_id)||empty($user)||empty($comment)) 
{
    header("location:userHome.php?erorr=empty_field");
}
else{
    $rslt = $user->addcomment($user_id,$post_id,$comment);
    header("location:userHome.php?done");
} 