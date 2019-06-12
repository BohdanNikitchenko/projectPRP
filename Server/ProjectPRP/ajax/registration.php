<?php
session_start();
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$name = ($_POST['name']);
$surname= ($_POST['surname']);
$thirdname = ($_POST['thirdname']);
$phone = ($_POST['phone']);



$mysql = new mysqli("localhost","root","","users");
if ($mysql->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$mysql->query("SET NAMES 'utf-8'");
$result = $mysql->query("INSERT INTO users(Email,Password,Name,SurName,ThierdName,PHONE) VALUES('$email','$pass','$name','$surname','$thirdname','$phone');");

if($result == false){
    echo "fail";
}else{
    echo"http://localhost/projectPRP/autorization.php";
}

?>