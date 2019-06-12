<?php
session_start();
$email = $_POST['login'];
$pass = md5($_POST['password']);

    $mysql = new mysqli("localhost", "root", "", "users");
    if ($mysql->connect_errno) {
        printf("Не удалось подключиться: %s\n", $mysql->connect_error);
        exit();
    }
    $mysql->query("SET NAMES 'utf-8");
    $result = $mysql->query("SELECT * FROM users");
    $flag=false;
    foreach ($result as $user){
    if($email==$user['Email']&&$pass==$user['Password']){
        $_SESSION["loggedUser"] = $user;
        $flag=true;
        break;

    }
    }
if($flag==true){
    echo "http://localhost/projectPRP/account1.php";
}else {
    echo "fail";
}

?>