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
function get_min_budjet_univer(){

global $db;
    $min_budj_univer = $db->query("SELECT DISTINCT  `Name_Universities`,  `Min_Budget` FROM `specialty_in_universities` WHERE `Min_Budget`>190 AND `Min_Budget`<200 GROUP BY `Name_Universities` ORDER by `Min_Budget` DESC ");
    return $min_budj_univer;
}
function get_min_contract_univer(){

    global $db;
    $min_contr_univer = $db->query("SELECT DISTINCT  `Name_Universities`,  `Min_Budget` FROM `specialty_in_universities` WHERE `Min_Contract`>190 AND `Min_Contract`<200 GROUP BY `Name_Universities` ORDER by `Min_Contract` DESC ");
    return $min_contr_univer;
}
?>