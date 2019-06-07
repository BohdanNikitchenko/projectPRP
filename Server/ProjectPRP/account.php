<?php
session_start();
$user=$_SESSION["loggedUser"];
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js.map"></script>
    <script type="text/javascript" src="js/bootstrap.js.map"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js.map"></script>
    <script type="text/javascript" src="js/bootstrap.min.js.map"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/account.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/code.js"></script>
    <script type="text/javascript" src="js/acc.js"></script>


    <title>Особистий кабінет</title>
    <link rel="shortcut icon" href="photo_2019-05-24_00-38-31.png" type="image/png">
</head>
<body link="black" vlink="black" alink="black">
<a name="top"></a>
<img id="imgacc" src="img/user-account-box.png">
<a id="acc" href="Account.html">Особистий<br> кабінет</a>
<img id="imLog" src="img/photo_2019-04-23_20-44-08.jpg">
<a id="logo" href="menu.html">АбітPROмощник</a>
<ul class="menu">
    <li>
        <a href="menu.html">Новини</a>
    </li>
    <li>
        <a href="#">ЗНО</a>
        <ul>
            <li><a href="ZNOGenInfo.html">Загальна інформація</a></li>
            <li><a href="PredmZNO.html">Предмети ЗНО</a></li>
            <li><a href="Test.html">Тести</a></li>
        </ul>
    </li>
    <li>
        <a href="Specialities.html">Спеціальності</a>
    </li>
    <li>
        <a href="#">ЗВО</a>
        <ul>
            <li><a href="ZVO.html">Перелік всіх ЗВО</a></li>
            <li><a href="Rate.html">Рейтинги</a></li>
        </ul>
    </li>
</ul>
<a id="toTop" href="#top" style="display: block; cursor: pointer;">^ Наверх ^</a>
<div class="menuacc1">
    <br>
    <a class="namemenu1" href="Account.html">Особиста інформація</a>
</div>
<div class="menuacc2">
    <br>
    <a class="namemenu2" href="ChooseZVO.html">Обрані ЗВО</a>
</div>
<div class="menuacc3">
    <br>
    <a class="namemenu3" href="ChooseS.html">Обрані Спеціалності</a>
</div><div class="container m-auto">
<form id="form">

    <div class="info">
        <div class="div">
            <img id="photo" src="img/user-account-box.png">
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div class="phio">
                <?php
                $user["SurName"];
                echo "<input id=\"name\" type=\"text\" name=\"\" value=\"".$user["SurName"]."\" disabled><br>";
                echo "<br><input id=\"surename\" type=\"text\" name=\"\" value=\"".$user["Name"]."\" disabled><br>";
                echo "<br><input id=\"father\" type=\"text\" name=\"\" value=\"".$user["ThierdName"]."\" disabled><br>";
                echo "<br><input id=\"mail\" type=\"text\" name=\"\" value=\"".$user["Email"]."\" disabled>";
                ?>

            </div>
        </div>
        <div class="down">
            <input id="downloadphoto" type="button" name="" onclick="" value="Завантажити фото">
        </div>
        <h2>ЗНО</h2>
        <div id="numzno">
            <a>Кількість ЗНО</a>
            <select id="numpredm">
                <option selected value="s1">3</option>
                <option value="s2">4</option>
            </select>
            <input id="num" type="submit" name="" value="ok">
        </div>
        <div id="zn1">
            <br><a id="mova">Українська мова та література</a>
            <input class="bal" id="bal1" type="text" name="" value="193" disabled>
        </div>
        <div id="zn2">
            <br><select id="zno2" disabled>
                <option selected value="zno1">Математика</option>
                <option value="zno1">Історія України</option>
            </select>
            <input class="bal" id="bal2" type="text" name="" value="198" disabled>
        </div>
        <div id="zn3">
            <br><select id="zno3" disabled>
                <option value="z1">Англійська мова</option>
                <option value="z2">Історія України</option>
                <option value="z3">Фізика</option>
                <option value="z4">Іспанська, німеціка та французька мови</option>
                <option value="z5">Біологія</option>
                <option value="z6">Географія</option>
                <option value="z7">Хімія</option>
            </select>
            <input class="bal" id="bal3" type="text" name="" value="195" disabled>
        </div>
        <div id="zn4">
            <br><select id="zno4" disabled>
                <option value="zn1">Англійська мова</option>
                <option value="zn2">Історія України</option>
                <option value="zn3">Фізика</option>
                <option value="zn4">Іспанська, німеціка та французька мови</option>
                <option value="zn5">Біологія</option>
                <option value="zn6">Географія</option>
                <option value="zn7">Хімія</option>
            </select>
            <input class="bal" id="bal4" type="text" name="" value="176" disabled>
        </div>
        <div class="down1">
            <input id="change" type="button" name="" onclick="changeinfo()" value="Редагувати">
            <input id="save" type="button" name="" onclick="saveinfo()" value="Зберегти зміни">
        </div>
        <div id="exit">
            <button  id="ex" type="button" name="" value="Вихід"></button>
        </div>
    </div>
</form>
<?php require "footer.php";?></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/do.js"></script>

</body>
</html>