<?php
session_start();
$subj_0 = $_POST["subj_0"];
$subj_1 = $_POST["subj_1"];
$subj_2 = $_POST["subj_2"];

$mysql = new mysqli("localhost", "root", "", "users");
if ($mysql->connect_errno) {
    printf("Не вдається з'єднатися: %s\n", $mysql->connect_error);
    exit();
}

$mysql->query("SET NAMES 'utf8'");

echo "<table border='2px'>
<tr>
    <th bgcolor='#a9a9a9'>Номер спеціальності</th>
    <th bgcolor='#a9a9a9'>Назва спеціальності</th>
    <th bgcolor='#a9a9a9'>Університет</th>
    <th bgcolor='#a9a9a9'>Мін. бал на бюджет</th>
    <th bgcolor='#a9a9a9'>Мін. бал на контракт</th>
</tr>
";


$result = $mysql->query("SELECT * FROM specialty_in_universities WHERE NOT ".$subj_0." = 0 AND NOT ".$subj_1." = 0 AND NOT ".$subj_2." = 0;");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";

        echo "<td>".$row['Id_specialty']."</td>";
        echo "<td>".$row['Name_Specialty']."</td>";
        echo "<td>".$row['Name_Universities']."</td>";
        echo "<td>".$row['Min_Budget']."</td>";
        echo "<td>".$row['Min_Contract']."</td>";

        echo "</tr>";
    }
}
echo "</table>";
