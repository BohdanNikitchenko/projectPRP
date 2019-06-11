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

function get_universities_all() {
    global $db;
    $universities = $db->query("SELECT DISTINCT Name_Universities FROM specialty_in_universities");
    return $universities;
}


function get_specialty_by_name($univer_name) {
    global $db;
    $specialty = $db->query("SELECT * FROM specialty_in_universities WHERE Name_Universities=$univer_name");
    foreach ($specialty as $spec){
        return $spec;
    }
}

function get_specialty_all() {
    global $db;
    $specialty = $db->query("SELECT DISTINCT Name_Specialty, Id_specialty FROM specialty_in_universities");
    return $specialty;
}
?>