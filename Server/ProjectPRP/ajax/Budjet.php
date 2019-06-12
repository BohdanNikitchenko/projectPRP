<?php
session_start();
$Id_specialty = $_POST["Id_specialty"];
$Name_Universities = $_POST["Name_Universities"];
//echo "wqwertyu";
$mysql = new mysqli("localhost","root","","users");
if ($mysql->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$mysql->query("SET NAMES 'utf8'");
    $result = $mysql->query("SELECT Min_Budget, MathsU, Ukrainian_LanguageU, EnglishU, PhysicsU, HistoryU, BiologyU, GeographyU, ChemistryU, SchoolU FROM specialty_in_universities WHERE Id_specialty = '$Id_specialty' AND Name_Universities = '$Name_Universities' ORDER BY Min_Budget DESC LIMIT 1");

/*$arr=array();
if (mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_assoc($result)){
        $arr[]=$row;
    }
}

$_SESSION["SpecRate"] = $arr;*/
/*echo mysqli_num_rows($result); //0
echo mysqli_num_fields($result); //19*/

if($result == false){
    echo "fail";
}else{
    //echo "success";
    $row=mysqli_fetch_row($result);
    echo $row[0];
    echo ',';
    echo $row[1];
    echo ',';
    echo $row[2];
    echo ',';
    echo $row[3];
    echo ',';
    echo $row[4];
    echo ',';
    echo $row[5];
    echo ',';
    echo $row[6];
    echo ',';
    echo $row[7];
    echo ',';
    echo $row[8];
    echo ',';
    echo $row[9];
}
?>