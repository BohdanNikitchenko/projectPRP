<?php

session_start();
$spec = $_POST["spec"];

$mysql = new mysqli("localhost", "root", "", "users");
if ($mysql->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$mysql->query("SET NAMES 'utf8'");


echo "<table border='2px'>
<tr>
    <th bgcolor='#a9a9a9'>Номер спеціальності</th>
    <th bgcolor='#a9a9a9'>Назва спеціальності</th>
    <th bgcolor='#a9a9a9'>Університет</th>
    <th bgcolor='#a9a9a9'>Форма навчання</th>
    <th bgcolor='#a9a9a9'>Факультет</th>
    <th bgcolor='#a9a9a9'>Пропозиція</th>
    <th bgcolor='#a9a9a9'>Мін. бал на бюджет</th>
    <th bgcolor='#a9a9a9'>Мін. бал на контракт</th>
    <th bgcolor='#a9a9a9'>Предмети ЗНО</th>
</tr>
";
$result = $mysql->query("SELECT * FROM specialty_in_universities WHERE Name_Specialty LIKE '%".$spec."%';");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";

        echo "<td>".$row['Id_specialty']."</td>";
        echo "<td>".$row['Name_Specialty']."</td>";
        echo "<td>".$row['Name_Universities']."</td>";
        echo "<td>".$row['BM']."</td>";
        echo "<td>".$row['Faculty']."</td>";
        echo "<td>".$row['Proposition']."</td>";
        echo "<td>".$row['Min_Budget']."</td>";
        echo "<td>".$row['Min_Contract']."</td>";

        $subjects="<td>";
        if($row['Ukrainian_LanguageU'] != null){
            $subjects .= "Укр. мова та літ-ра(".$row['MathsU']."), ";
        }
        if($row['MathsU'] != null){
            $subjects .= "Мат.(".$row['MathsU']."), ";
        }
        if($row['HistoryU'] != null){
            $subjects .= "Істор.(".$row['HistoryU']."), ";
        }
        if($row['EnglishU'] != null){
            $subjects .= "Англ.(".$row['EnglishU']."), ";
        }
        if($row['PhysicsU'] != null){
            $subjects .= "Фіз.(".$row['PhysicsU']."), ";
        }
        if($row['BiologyU'] != null){
            $subjects .= "Біол.(".$row['BiologyU']."), ";
        }
        if($row['GeographyU'] != null){
            $subjects .= "Геогр.(".$row['GeographyU']."), ";
        }
        if($row['ChemistryU'] != null){
            $subjects .= "Хім.(".$row['ChemistryU']."), ";
        }

        $subjects .= "</td>";
        echo $subjects;


        echo "</tr>";
    }
}
echo "</table>";

