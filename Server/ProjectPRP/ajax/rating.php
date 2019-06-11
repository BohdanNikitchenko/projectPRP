<?php
session_start();
$specnum=$_POST['SpecNum'];

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
$i=0;
$result = $db->query("SELECT DISTINCT Name_Universities FROM specialty_in_universities WHERE Id_specialty=$specnum ORDER by Min_Budget DESC");
foreach ($result as $res){
   $arr[$i]=res;
   $i++;
}
$_SESSION["SpecRate"] = $arr;

?>