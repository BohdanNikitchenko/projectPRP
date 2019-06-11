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
    $universities = $db->query("SELECT * FROM universities LIMIT 2");
    return $universities;
}

function get_universities_with_sql($q) {
    global $db;
    $universities = $db->query($q);
    return $universities;
}


function get_universities_by_id($id) {
    global $db;
    $universities = $db->query("SELECT * FROM universities WHERE id=$id");
    foreach ($universities as $univer){
    return $univer;
}
}

function get_num_rows() {
    global $db;
    $num_uni = $db->query("SELECT * FROM universities");
    return $num_uni->num_rows;
}