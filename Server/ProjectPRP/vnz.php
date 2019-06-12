<?php
session_start();
$user=$_SESSION["loggedUser"];
$q="";
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
<div id="scores">
<body>


<div class="container emp-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group" id="adv-search">
                    <input type="text" class="form-control"   name="query" placeholder="Поиск" id="search_inp"/>
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-success " data-toggle="dropdown" aria-expanded="false" onclick='location.href="vnz.php"'><i class="fa fa-refresh fa-spin  fa-fw"></i></button>

                            <button id="search_btn" name="search_btn" class="btn btn-success form-control">Найти</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="load_all">
<div id="load_div">
<?php

    $id_list ='';

    $universities = get_universities_all();
function write($row,$q)
{
    if($q!=""){
        $universities = get_universities_with_sql($q);
        while ($row = mysqli_fetch_array($universities)){
            $null="";
            write($row,$null);
        }
           return;
    }
    global $id_list;
    $id_list=$row['id'];
    ?>


    <div class="container emp-profile" id="contain_prof">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <div class="teg">
                                <h5><em><?php echo $row["Name_Universities"] ?></em></h5>
                            </div>
                        </div>
                        <div class="form-group col-md">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div id="favorite">
                                        <style>
                                            #favorite {
                                                width: 100%;
                                                text-align: right;
                                                align-content: center;
                                            }

                                            .fa {

                                                font-size: 100px;

                                            }

                                            .fa:hover {
                                                color: #5cb85c;
                                            }
                                        </style>

                                        <style>
                                            #like_button{
                                                pointer-events: none;
                                            }
                                        </style>

                                        <i onclick="myFunction(this,<?php echo $row["favorite"]; ?>)" 
                                           class="fa <?php

                                           if ($row["favorite"] == "1") {

                                               echo "fa-thumbs-up";
                                           } else {
                                               echo "fa-thumbs-down";
                                           }

                                           ?>
                                           fa-3x " id="like_button"
                                           value="<?php echo $row["favorite"]; ?>"></i>



                                        <div value="<?php echo $row['id'] ?>" id="getId"></div>
                                        <script>

                                            function myFunction(x, y) {

                                                if (y == 1) {
                                                    x.classList.toggle("fa-thumbs-down");
                                                    x.classList.toggle("fa-thumbs-up");

                                                } else {
                                                    x.classList.toggle("fa-thumbs-down");
                                                    x.classList.toggle("fa-thumbs-up");
                                                }

                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <div>
                                    <img class="image"
                                         src="https://youruniversityguide.files.wordpress.com/2012/06/c-170.jpg"
                                         alt="Generic placeholder thumbnail">
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="info" name="info">


                                <label for="inputPassword4">
                                    <h5>Область, населений пункт:
                                        <small>
                                            <em><?php echo $row["Region_U"], ", ", $row["City_U"] ?></em>
                                        </small>
                                    </h5>
                                </label><br>
                                <label for="inputPassword4">
                                    <h5>Адреса:
                                        <small><em><?php echo $row["Address_U"] ?></small>
                                        </em></h5>
                                </label><br>
                                <label for="inputPassword4">
                                    <h5>Телефони:
                                        <small><em><?php echo $row["Phone_U"] ?></small>
                                        </em></h5>
                                </label><br>
                                <label for="inputPassword4">
                                    <h5>Веб-сайт:
                                        <small>
                                            <em><a href="<?php echo $row["Web_U"] ?>"><?php echo $row["Web_U"] ?></a>
                                        </small>
                                        </em></h5>
                                </label><br>
                                <label for="inputPassword4"><h5>Опис ВНЗ: </h5></label><br>
                                <label for="inputPassword4">
                                    <h7>
                                        <ul>
                                            <li>Тип ВНЗ:
                                    </h7>
                                    <em><?php echo $row["Type_U"] ?></em></label><br>
                                <label for="inputPassword4">
                                    <h7>
                                        <li>Форма власності:
                                    </h7>
                                    <em>
                                        <h7><?php echo $row["Control_Form_U"] ?></em></label><br>
                                <label for="inputPassword4">
                                    <h7>
                                        <li>Керівник:
                                    </h7>
                                    <em><?php echo $row["Director_U"] ?></em></ul></label><br>


                            </div>
                        </div>
                        <style>
                            #info_button {
                                width: 100%;
                            }

                            #buttoninfo {
                                width: 100%;
                            }
                        </style>
                        <div id="info_button">

                            <a href="univer.php?id=<?php echo $row['id'] ?>"
                               class="btn btn-success  active" role="button" aria-pressed="true"
                               id="buttoninfo"><em>Детальніше</em></a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

}

      while ($row = mysqli_fetch_array($universities)){
write($row,$q);

}

?>
</div>
</div>
<div class="container emp-more" id="conteiner_more">
    <div class="card mb-4 shadow-sm">

<button id="btn_more" name="btn_more"  value="SELECT * FROM universities WHERE id >'<?php echo $id_list?>' LIMIT 2" class="btn btn-success form-control"  >Load All</button>
<button id="button_value" value="<?php echo $id_list;?>" hidden >
    </button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/do.js"></script>
<script src="js/search.js"></script>
    <script src="js/favorite.js"></script>
</body>
</div>
<footer>
    <?php require "footer.php";?>
</footer>
</html>

<script>
$(document).ready(function () {
    $(document).on('click', '#btn_more', function () {

        var id = $('#button_value').val();
        var sql = $('#btn_more').val();
        $('#btn_more').html("Loading...");
        $.ajax({
            url: "load_data_more.php",
            method: "POST",
            data: {sql:sql,id:id},

            success: function (data) {
                if (data != '') {
                    $('#conteiner_more').remove();
                    $('#load_div').append(data);
                } else {
                    $('#btn_more').html("no Data");
                }
            }
        })
    })
})
</script>