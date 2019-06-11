<?php

session_start();
$spec = $_POST["spec"];

$mysql = new mysqli("localhost", "root", "", "users");
if ($mysql->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT * FROM specialty_in_universities WHERE Name_Specialty LIKE '%".$spec."%';");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo $row['Id_specialty'];
        echo $row['Name_Specialty'];

    }
}

