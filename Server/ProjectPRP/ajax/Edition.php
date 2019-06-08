<?php
session_start();
$user=$_SESSION["loggedUser"];
$SerName = $_POST['SerName'];
$name = ($_POST['name']);
$thirdname = ($_POST['ThirdName']);
$email=($_POST['email']);
$phone=($_POST['phone']);
$password=($_POST['password']);
$newpassword=($_POST['NewPassword']);
$subj1=($_POST['selectSubj1']);
$subj2=($_POST['selectSubj2']);
$subj3=($_POST['selectSubj3']);


 $id=$user['Id'];

$mysql = new mysqli("localhost","root","","users");
if ($mysql->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$mysql->query("SET NAMES 'utf-8");
$result = $mysql->query("UPDATE users SET Email='$email', Password='$newpassword', Name='$name', SurName ='$SerName', ThierdName='$thirdname', PHONE='$phone', Subj1='$subj1',Subj2='$subj2', Subj3='$subj3' WHERE Id ='$id';");
$_SESSION["loggedUser"] = $user;
if($result == false){
    echo "fail";
}else{
    echo"http://localhost/projectPRP/account1.php";
}

?>