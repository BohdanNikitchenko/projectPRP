<?php

$dbhost = "localhost";
$dbname="specialty_in_universities";
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
    $universities = $db->query("SELECT Name_Universities FROM universities");
    return $universities;
}


function get_universities_by_id($id) {
    global $db;
    $universities = $db->query("SELECT * FROM universities WHERE id=$id");
    foreach ($universities as $univer){
        return $univer;
    }
}
?>