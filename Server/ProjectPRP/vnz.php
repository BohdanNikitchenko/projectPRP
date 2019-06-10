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
<div id="scores">
<body>

<form method="post">
<div class="container emp-search">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group" id="adv-search">
                    <input type="text" class="form-control" placeholder="Search for snippets" name="search" />
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="filter">Filter by</label>
                                            <select class="form-control">
                                                <option value="0" selected>Назва</option>
                                                <option value="1">Область</option>
                                                <option value="2">Населений пункт</option>
                                                <option value="3">Тип ВНЗ</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label for="contain">Contains the words</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <button type="submit"  class="btn btn-success">Search</button>
                                    </form>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"><i class="fa fa-search" aria-hidden="true"></i></span></button>
                            <?php
                            if (!empty($_POST['submit'])) {
                                echo ($_POST['search']);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<?php

$index =0;
$index_last=5;
    $universities = get_universities_all();
    $finish = get_num_rows();
    get_content();

  function get_content()
  {

      global $index_last;
      global $index;
      while ($index < $index_last):
          $index++;
          $univer = get_universities_by_id($index);
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
                                  <div class="form-row">
                                      <div class="form-group col-md-12">
<div id="favorite">
    <style>
        #favorite{
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


    <i onclick="myFunction(this,<?php echo $univer["favorite"]; ?>)" class="fa <?php

    if($univer["favorite"]=="1"){

        echo "fa-thumbs-up";
    } else {
        echo "fa-thumbs-down";}

    ?> fa-3x " ></i>

    <script>

        function myFunction(x,y) {

            if (y == 1) {
                x.classList.toggle("fa-thumbs-down");
                x.classList.toggle("fa-thumbs-up");
                <?php
                    echo 0;
                if(isset($_POST['fa'])) {
                    global $db;
                    $id = $univer["id"];
                    $sql = "UPDATE universite SET favorite='0' WHERE id = $id";
                    $query = $db->query($sql);
                }
                ?>
            }else{
                x.classList.toggle("fa-thumbs-down");
                x.classList.toggle("fa-thumbs-up");
                <?php
                    echo 1;
                if(isset($_POST['fa'])) {
                    global $db;
                    $id = $univer["id"];
                    $sql = "UPDATE universite SET favorite='1' WHERE id = '$id'";
                    $query = $db->query($sql);
                }
                ?>
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
                                           src="https://media3.mensxp.com/media/content/2017/Dec/header-3-copy-1513352222_1100x513.jpg"
                                           alt="Generic placeholder thumbnail">
                                  </div>
                              </div>
                              <div class="form-group col-md-6" id="info" name="info">


                                  <label for="inputPassword4">
                                      <h5>Область, населений пункт:
                                          <small>
                                              <em><?php echo $univer["Region_U"], ", ", $univer["City_U"] ?></em>
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
<style>
    #info_button{
        width: 100%;
    }
    #buttoninfo{
        width: 100%;
    }
</style>
<div id="info_button">

                                  <a href="univer.php?id=<?php echo $univer['id'] ?>"
                                     class="btn btn-success  active" role="button" aria-pressed="true"
                                     id="buttoninfo"><em>Детальніше</em></a>

</div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

      <?php

      endwhile;
  }
?>

<?php

if(isset($_POST['loadmore'])){
    global $index_last;
    global $finish;
    $index_last = $finish;

    get_content();
}
?>
<div class="container emp-more" id="buttonfuck" >
    <div class="card mb-4 shadow-sm" >
        <style>
            #buttonfuck{
                visibility: <?php
if($index_last==$finish){
    echo "hidden";
}
?>;
            }

            button#loadmore{
                width: 100%;
            }
        </style>
        <form action="vnz.php" method="post"  id="loadmore" >
            <button type="sub" name="loadmore" class="btn btn-outline-success"  id="loadmore" >Load All</button>
        </form>

    </div>
</div>
</body>
</div>
<footer>
    <?php require "footer.php";?>
</footer>
</html>