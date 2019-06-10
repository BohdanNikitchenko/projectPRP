<?php
session_start();
$mysql = new mysqli("localhost","root","","users");

$favorite = intval($_POST['favorite']);
$id = intval($_POST['id']);

if($favorite) {
    $mysql->query("SET NAMES 'utf-8");
    $mysql->query("UPDATE universite SET favorite='1' WHERE id = '$id'");
    $message = "Ok";
}
else{
    $message="bad";
}

return $message;
?>