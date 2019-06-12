<?php
session_start();
//$user=$_SESSION["loggedUser"];
/*$Id_specialty = $_POST["Id_specialty"];
$Name_Universities = $_POST["Name_Universities"];
$_SESSION["calc"] = "potion";
echo "wqwertyu";*/

/*$mysql = new mysqli("localhost","root","","users");
if ($mysql->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$mysql->query("SET NAMES 'utf-8");
$result = $mysql->query("SELECT Min_Budget FROM specialty_in_universities WHERE Name_Universities = '$Name_Universities' AND Id_specialty = '$Id_specialty' ORDER BY Min_Budget DESC");
/*$counter = 0;
$res = 0;
foreach ($result as $r){
    $res = $r;
    break;
    /*if($counter == 0){
        //$_SESSION["loggedUser"] = $user;
        $res =
        break;
    }
}

if($result == false){
    echo "fail";
}else{
    echo "success";
}*/


include 'safemysql.class.php';
$db = new SafeMysql(array('user' => $user, 'pass' => $pass,'db' => $db, 'charset' => 'utf-8'));
?>