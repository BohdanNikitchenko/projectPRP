<?php
session_start();
$dbhost = "localhost";
$dbname="users";
$username="root";
$password="";


$id = intval($_POST['id']);
$value = intval($_POST['value']);


$mysql = new mysqli("localhost", "root", "", "users");
if ($mysql->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$mysql->query("SET NAMES 'utf-8'");

if($value=='0'){
    $result = $mysql->query("UPDATE universities SET favorite='1' WHERE id = '$id'");
}
if($value=='1') {
    $result = $mysql->query("UPDATE universities SET favorite='0' WHERE id = '$id'");
}

?>