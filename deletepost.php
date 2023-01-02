<?php

session_start();
require_once("classes.php");
$user =  unserialize($_SESSION["user"]);
$id = $_GET["post_id"];
// var_dump($_POST);
if (empty($id)) 
{
    header("location:userHome.php?erorr=empty_field");
}
else{
    $rslt = $user->deletepost($id);
    header("location:userHome.php?done");
} 