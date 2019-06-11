<?php
session_start();
$dbhost = "localhost";
$dbname="users";
$username="root";
$password="";

$favorite = intval($_POST['finger_val']);
$id = intval($_POST['finger_id']);


$mysql = new mysqli("localhost", "root", "", "users");
if ($mysql->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$mysql->query("SET NAMES 'utf-8");
$result = $mysql->query("UPDATE universities SET favorite=1 WHERE id =$id");

?>