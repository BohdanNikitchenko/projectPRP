<?php
session_start();
$user=$_SESSION["loggedUser"];
$counter = 5;
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="jquery.lazy.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/univer.css">


    </head>
<header>
    <?php require "db.php";?>
    <?php require "header.php";?>
</header>
<body>

<?php
$univer = get_universities_by_id($_GET['id']);
 ?>


    <div class="container emp-profile">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <div class="teg">
                                <h5><em><?php echo $univer["Name_Universities"] ?></em></h5>
                            </div>
                        </div>
                        <div class="form-group col-md">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <div>
                                <img class="image"
                                     src="https://media3.mensxp.com/media/content/2017/Dec/header-3-copy-1513352222_1100x513.jpg"
                                     alt="Generic placeholder thumbnail">
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="info" name="info">


                            <label for="inputPassword4">
                                <h5>Область, населений пункт:
                                    <small><em><?php echo $univer["Region_U"], ", ", $univer["City_U"] ?></em>
                                    </small>
                                </h5>
                            </label><br>
                            <label for="inputPassword4">
                                <h5>Адреса:
                                    <small><em><?php echo $univer["Address_U"] ?></small>
                                    </em></h5>
                            </label><br>
                            <label for="inputPassword4">
                                <h5>Телефони:
                                    <small><em><?php echo $univer["Phone_U"] ?></small>
                                    </em></h5>
                            </label><br>
                            <label for="inputPassword4">
                                <h5>Веб-сайт:
                                    <small>
                                        <em><a href="<?php echo $univer["Web_U"] ?>"><?php echo $univer["Web_U"] ?></a>
                                    </small>
                                    </em></h5>
                            </label><br>
                            <label for="inputPassword4"><h5>Опис ВНЗ: </h5></label><br>
                            <label for="inputPassword4">
                                <h7>
                                    <ul>
                                        <li>Тип ВНЗ:
                                </h7>
                                <em><?php echo $univer["Type_U"] ?></em></label><br>
                            <label for="inputPassword4">
                                <h7>
                                    <li>Форма власності:
                                </h7>
                                <em>
                                    <h7><?php echo $univer["Control_Form_U"] ?></em></label><br>
                            <label for="inputPassword4">
                                <h7>
                                    <li>Керівник:
                                </h7>
                                <em><?php echo $univer["Director_U"] ?></em></ul></label><br>


                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Рейтинг:
                                <fieldset class="rating">
                                    <div class="rating__group">
                                        <input class="rating__star" type="radio" name="1" id="1" value="1"
                                               aria-label="Ужасно">
                                        <input class="rating__star" type="radio" name="2" id="2" value="2"
                                               aria-label="Сносно">
                                        <input class="rating__star" type="radio" name="3" id="3" value="3"
                                               aria-label="Нормально">
                                        <input class="rating__star" type="radio" name="4" id="4" value="4"
                                               aria-label="Хорошо">
                                        <input class="rating__star" type="radio" name="5" id="5" value="5"
                                               aria-label="Отлично">
                                    </div>
                                </fieldset>
                            </label>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php

?>
</body>
<div class="container emp-profile">

    <div class="card mb-4 shadow-sm">
        <div id="mapsname">
            <h1 >MAPS</h1>
        </div>
        <style>
            #mapsname{
                color: #fff;
                background-color: #5cb85c;
                border-color: #4cae4c;
                text-align: center;
               width: 100.25%;
                height: 5%;
                margin-left: -2px;
                border-radius: 2px 2px 0 0;


            }
            #map{
                width: 100%;
                height: 300px;
            }
        </style>
        <div id="map" style="margin: 1px 1px 1px 1px;">
                <iframe style="width:100%; height:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.8647979407397!2d36.22713710881407!3d50.01372456605938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a1243f9e69d1%3A0x6daed05394f03251!2z0KXQsNGA0YzQutC-0LLRgdC60LjQuSDQvdCw0YbQuNC-0L3QsNC70YzQvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDRgNCw0LTQuNC-0Y3Qu9C10LrRgtGA0L7QvdC40LrQuA!5e0!3m2!1sru!2sua!4v1558460768899!5m2!1sru!2sua" frameborder="0" allowfullscreen></iframe>
        </div>

        <script>
            function initMap() {
                var element = document.getElementById('map');
                var options = {
                    zoom: 5,
                    center: {lat:55.7558, lng:37.6173}
                };
                var myMap = new google.maps.Map(element,options);

                var marker = new google.maps.Marker({
                    position{lat:55.7558, lng:37.6173},
                    map: myMap
                });
            }

        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCDctQ06PR8jsgsvM-WKtgY-lKC34Gzh4&callback=initMap"
                type="text/javascript"></script>
    </div>
</div>
<footer>
    <?php require "footer.php";?>
</footer>
</html>
