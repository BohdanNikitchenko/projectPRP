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
    <link rel="stylesheet" href="css/vnz.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<header>
    <?php require "db.php";?>
    <?php require "header.php";?>
</header>
<body>
<div class="container emp-search">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group" id="adv-search">
                    <input type="text" class="form-control" placeholder="Search for snippets" />
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="filter">Filter by</label>
                                            <select class="form-control">
                                                <option value="0" selected>All Snippets</option>
                                                <option value="1">Most popular</option>
                                                <option value="2">Top rated</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="0" selected>All Snippets</option>
                                                <option value="1">Count specialties</option>
                                                <option value="2">Just do it!!!</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="contain">Contains the words</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <button type="submit" class="btn btn-success">Search</button>
                                    </form>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"><i class="fa fa-search" aria-hidden="true"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php

    $universities = get_universities_all();

        foreach ($universities as $univer):

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

        <?php
        endforeach;

?>

<div class="container emp-more">
    <div class="card mb-4 shadow-sm">
       
    <button type="button" class="btn btn-outline-success" id="loadmore" onclick="myFunction()">More</button>
    </div>
</div>
</body>
<footer>
    <?php require "footer.php";?>
</footer>
</html>