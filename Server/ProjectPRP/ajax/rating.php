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

$result = $db->query("SELECT DISTINCT Name_Universities, Min_Budget FROM specialty_in_universities WHERE Min_Budget<=200 AND Min_Budget>=100 and Id_specialty=$specnum GROUP BY Name_Universities   ORDER by Min_Budget DESC");
$arr=array();
if (mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_assoc($result)){
        $arr[]=$row;
    }
}

$_SESSION["SpecRate"] = $arr;
$flag=false;
if($result == false){
    echo "fail";
}else{
//    foreach ($arr as $a) {
//        if ($flag == false) {
//            $flag = true;
//            echo $a['Name_Universities'];
//        } else {
//            echo "SPLITHERE" . $a['Name_Universities'];
//        }
//    }
    echo "http://localhost/projectPRP/Rate.php";
}




?>