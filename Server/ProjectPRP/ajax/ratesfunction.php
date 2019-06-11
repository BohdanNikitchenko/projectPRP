<?php


$dbhost = "localhost";
$dbname="users";
$username="root";
$password="";

$db = new mysqli($dbhost,$username,$password,$dbname);
if ($db->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$db->query("SET CHARACTER SET 'utf8'");

function get_specialities() {
    global $db;
    $specialities = $db->query("SELECT DISTINCT `Id_specialty`, `Name_Specialty` FROM (SELECT `Id_specialty`, `Name_Specialty` FROM `specialty_in_universities`) AS T  GROUP BY `Id_specialty` ORDER BY `Id_specialty` ");
    return $specialities;
}

?>