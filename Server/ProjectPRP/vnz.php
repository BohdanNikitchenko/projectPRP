<?php
session_start();
$user=$_SESSION["loggedUser"];
?>
<!DOCTYPE html>
<html>
<head>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/vnz.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<header>
    <?php require "header.php";?>
</header>
<body>
<div class="container emp-profile">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">

    <form>
        <div class="form-row">
            <div class="form-group col-md-6 ">
                <div class="teg">
                    <h5><em>Харківський національний університет радіоелектроніки</em></h5>
                </div>
        </div>
            <div class="form-group col-md">

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 ">
                <div >
                <img class="image" src="https://media3.mensxp.com/media/content/2017/Dec/header-3-copy-1513352222_1100x513.jpg" alt="Generic placeholder thumbnail">
            </div>
            </div>
            <div class="form-group col-md-6" id="info" name="info">


                <label for="inputPassword4"><h5>Область, населений пункт:  <small><em>Харківська область, Харків</em></small></h5></label><br>
                <label for="inputPassword4"><h5>Адреса:  <small><em>просп. Науки, 14</small></em></h5></label><br>
                <label for="inputPassword4"><h5>Телефони:  <small><em>+380(57)-702-10-13</small></em></h5></label><br>
                <label for="inputPassword4"><h5>Веб-сайт:  <small><em>http://nure.ua</small></em></h5></label><br>
                <label for="inputPassword4"><h5>Опис ВНЗ: </h5></label><br>
                <label for="inputPassword4"><h7><ul><li>Тип ВНЗ: </h7><em>Університет</em></label><br>
                <label for="inputPassword4"><h7><li>Форма власності: </h7><em><h7>Державна</em></label><br>
                <label for="inputPassword4"><h7><li>Керівник: </h7><em>Ректор Семенець Валерій Васильович</em></ul></label><br>


            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Рейтинг:
                    <fieldset class="rating">
                        <div class="rating__group">
                            <input class="rating__star" type="radio" name="1" id="1" value="1" aria-label="Ужасно" >
                            <input class="rating__star" type="radio" name="2" id="2" value="2" aria-label="Сносно">
                            <input class="rating__star" type="radio" name="3" id="3" value="3" aria-label="Нормально">
                            <input class="rating__star" type="radio" name="4" id="4" value="4" aria-label="Хорошо">
                            <input class="rating__star" type="radio" name="5" id="5" value="5" aria-label="Отлично">
                        </div>
                    </fieldset>
                </label>

            </div>
            <div class="form-group col-md-4">


            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-success">Детальніше</button>
            </div>
        </div>
    </form>
        </div>
    </div>
</div>
</body>
<footer>
    <?php require "footer.php";?>
</footer>
</html>