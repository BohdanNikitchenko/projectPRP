<?php
session_start();
$user=$_SESSION["loggedUser"];
//$photoPath=($_POST['photoPath']);
$uploaded_filename = null;
if( isset( $_POST['my_file_upload'] ) ){
    // ВАЖНО! тут должны быть все проверки безопасности передавемых файлов и вывести ошибки если нужно

    $uploaddir = 'user_image'; // . - текущая папка где находится submit.php

    // cоздадим папку если её нет
    if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );

    $files      = $_FILES; // полученные файлы
    $done_files = array();

    // переместим файлы из временной директории в указанную
    foreach( $files as $file ){
        //$file_name = $file['name'];
        $file_name = strtotime("now") . "_" . $file['name'];
        if( move_uploaded_file( $file['tmp_name'], "$uploaddir/$file_name" ) ){
            $done_files[] = realpath( "$uploaddir/$file_name" );
            $uploaded_filename = $file_name;
        }
    }

    $data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');
    $id=$user['Id'];


    $mysql = new mysqli("localhost","root","","users");
    if ($mysql->connect_errno) {
        printf("Не удалось подключиться: %s\n", $mysql->connect_error);
        exit();
    }
    $mysql->query("SET NAMES 'utf-8");
    $result = $mysql->query("UPDATE users SET img='$uploaded_filename' WHERE Id ='$id'");


    $mysql1 = new mysqli("localhost", "root", "", "users");
    if ($mysql1->connect_errno) {
        printf("Не удалось подключиться: %s\n", $mysql1->connect_error);
        exit();
    }
    $mysql1->query("SET NAMES 'utf-8");
    $result1 = $mysql1->query("SELECT * FROM users");

    $flag=false;
    foreach ($result1 as $user){
        if($id==$user['Id']){
            $_SESSION["loggedUser"] = $user;
            break;
        }
    }
    die( json_encode( $data ) );
}

?>