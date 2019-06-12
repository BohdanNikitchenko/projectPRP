<?php
session_start();
global $array;
if(isset($_SESSION["loggedUser"])){
    $user=$_SESSION["loggedUser"];
}
$univer = $_SESSION["SpecRate"];
//print_r($univer)
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/rate.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Рейтинги ЗВО</title>
</head>

<body>
<header>
    <?php require "ajax/ratesfunction.php"; ?>
    <?php if(isset($_SESSION["loggedUser"])){
        require "header_un.php";
    }else{
        require "header.php";
    } ?>
</header>
<main role="main">
    <div class="container">
        <div class="modal-body mt-5 row">
            <div class="col-md-6">
                <a href="#zag">Загальний рейтинг ЗВО України</a>
                <a href="#spec">Рейтинг ЗВО України за вказаною спеціальністю</a>
                <a href="#bal">Рейтинг ЗВО України за середнім прохідним балом</a>
            </div>
            <div class="col-md-6">
                <a href="#b">Рейтинг ЗВО України за найвищим мінімальним балом на бюджет</a>
                <a href="#k">Рейтинг ЗВО України за найвищим мінімальним балом на контракт</a>
            </div>
        </div>
        <a name="zag"></a>
        <div class="card mt-5">
            <h5 class="card-header">Загальний рейтинг ЗВО України ТОП-20</h5>
            <table class="table table-striped" id="tab">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Назва ЗВО</th>
                    <th>ТОП 200 УкраЇна</th>
                    <th>Scopus</th>
                    <th>Бал ЗНО на контракт</th>
                    <th>Загальний бал</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Київський національний університет імені Тараса Шевченка</td>
                    <td>1</td>
                    <td>1</td>
                    <td>3</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Харківський національний університет імені В.Н. Каразіна	</td>
                    <td>3</td>
                    <td>2</td>
                    <td>10</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Національний технічний університет України «Київський політехнічний інститут імені ігоря Сікорського»</td>
                    <td>1</td>
                    <td>6</td>
                    <td>9</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Львівський національний університет імені Івана Франка</td>
                    <td>10</td>
                    <td>3</td>
                    <td>6</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Національний університет «Львівська політехніка»</td>
                    <td>5</td>
                    <td>9</td>
                    <td>12</td>
                    <td>26</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Національний університет «Києво-Могилянська академія»</td>
                    <td>12</td>
                    <td>18</td>
                    <td>2</td>
                    <td>32</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Національний медичний університет імені О.О. Богомольця</td>
                    <td>7</td>
                    <td>19</td>
                    <td>8</td>
                    <td>34</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Дніпровський національний університет імені Олеся Гончара</td>
                    <td>14</td>
                    <td>8</td>
                    <td>18</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Одеський національний університет імені І.І. Мечникова</td>
                    <td>18</td>
                    <td>5</td>
                    <td>25</td>
                    <td>48</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Сумський державний університет</td>
                    <td>9</td>
                    <td>14</td>
                    <td>51</td>
                    <td>74</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Львівський національний медичний університет імені Данила Галицького</td>
                    <td>43</td>
                    <td>11</td>
                    <td>21</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>12-13</td>
                    <td>Національний авіаційний університет</td>
                    <td>19</td>
                    <td>28</td>
                    <td>37</td>
                    <td>84</td>
                </tr>
                <tr>
                    <td>12-13</td>
                    <td>Чернівецький національний університет імені Юрія Федьковича</td>
                    <td>24</td>
                    <td>4</td>
                    <td>56</td>
                    <td>84</td>
                </tr>
                <tr>
                    <td>14-15</td>
                    <td>Національний фармацевтичний університет</td>
                    <td>20</td>
                    <td>31</td>
                    <td>34</td>
                    <td>85</td>
                </tr>
                <tr>
                    <td>14-15</td>
                    <td>Харківський національний медичний університет</td>
                    <td>31</td>
                    <td>25</td>
                    <td>29</td>
                    <td>85</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Національний технічний університет «Харківський політехнічний інститут»</td>
                    <td>4</td>
                    <td>10</td>
                    <td>79</td>
                    <td>93</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Дніпропетровська медична академія</td>
                    <td>57</td>
                    <td>23</td>
                    <td>16</td>
                    <td>96</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Донецький національний університет імені Василя Стуса</td>
                    <td>27</td>
                    <td>17</td>
                    <td>53</td>
                    <td>97</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Національний аерокосмічний університет ім. М.Є. Жуковського «Харківський авіаційний інститут»</td>
                    <td>11</td>
                    <td>21</td>
                    <td>68</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Харківський національний університет радіоелектроніки</td>
                    <td>23</td>
                    <td>20</td>
                    <td>58</td>
                    <td>101</td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="input-group mb-5 mt-5">
        <p><b>*</b>Оберіть бажану спеціальність зі списку, інакше буде показаний рейтинг за першою спеціальністю в списку</p>
            <input class="select" id="SpecInput" type="text" placeholder="Оберіть спеціальність зі списку" name="city" list="inputGroupSelect01">
            <datalist class="select" id="inputGroupSelect01">
                <!--  ЦИКЛЫ  -->
                <?php
                    $specialities =get_specialities();
                foreach ($specialities as $spec):

                    echo "<option value='$spec[Id_specialty] $spec[Name_Specialty]'></option>"
                ?>

                <?php
                endforeach;
                ?>
            </datalist>
            <div class="input-group-append">
                <input type="button" id="Rate"  class="input-group-text" for="inputGroupSelect02" value="Обрати"/>
            </div>
        </div>
        <a name="spec"></a>
        <div class="card mt-5">
            <h5 class="card-header">Рейтинг ЗВО України за вказаною спеціальністю</h5>
            <div id="id_t1">
                <div id="id_t2">
            <table class="table table-striped">

                <thead>
                <tr>

                    <th>№</th>
                    <th>Назва ЗВО</th>
                    <th>Мінімальний бал для держзамовлення</th>

                </tr>
                </thead>


                    <tbody id="t_r">

                    </tbody>
            </table></div></div>
        </div>

        <a name="bal"></a>
        <div class="card mt-5">
            <h5 class="card-header">Рейтинг ЗВО України за середнім прохідним балом</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Назва ЗВО</th>
                    <th>Середній прохідний бал</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Харківський національний університет радіоелектроніки</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Київський національний університет "Києво-Могилянська Академія"</td>
                    <td>180</td>
                </tr>
                </tbody>
                </tbody>
            </table>
        </div>

        <a name="b"></a>
        <div class="card mt-5">
            <h5 class="card-header">Рейтинг ЗВО України за найвищим мінімальним балом на бюджет</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Назва ЗВО</th>
                    <th>Мінімальний бал на бюджет</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $min_budj=get_min_budjet_univer();
                $j=1;
                foreach ($min_budj as $minb) {
                    echo "<tr>";
                    echo "<td>".$j++."</td>";
                    echo "<td>".$minb['Name_Universities']."</td>";
                    echo "<td>".$minb['Min_Budget']."</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>

        <a name="k"></a>
        <div class="card mt-5 mb-5">
            <h5 class="card-header">Рейтинг ЗВО України за найвищим мінімальним балом на контракт</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Назва ЗВО</th>
                    <th>Мінімальний бал на контракт</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Харківський національний університет радіоелектроніки</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Київський національний університет "Києво-Могилянська Академія"</td>
                    <td>180</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/do.js"></script>
</body>
<footer>
    <?php require "footer.php";?>
</footer>
</html>