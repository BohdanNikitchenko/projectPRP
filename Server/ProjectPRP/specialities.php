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
    <link rel="stylesheet" href="css/specialities.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <meta charset="utf-8" />
</head>
<header>
    <?php require "header.php";?>
</header>

<body>

    <div class="main">
        <div class="input-group">
            <div class="a"><input type="text" class="form-control" id="Search_spec" placeholder="Пошук спеціальностей" autofocus></div>
            <div class="input-group-append" ><button class="btn btn-secondary" type="button" id="Search_btn"><i class="fa fa-search"></i></button></div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Підбір спеціальностей за предметами ЗНО</h5>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ukr_lang" value="Українська мова та література" checked disabled>
                        <label class="form-check-label" for="ukr_lang">Українська мова та література</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="math" value="Математика">
                        <label class="form-check-label" for="math" >Математика</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="history" value="Історія України">
                        <label class="form-check-label" for="history">Історія України</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="english" value="Англійська мова">
                        <label class="form-check-label" for="english">Англійська мова</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="chemistry" value="Хімія">
                        <label class="form-check-label" for="chemistry">Хімія</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="biology" value="Біологія">
                        <label class="form-check-label" for="biology">Біологія</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="phyz" value="Фізика">
                        <label class="form-check-label" for="phyz">Фізика</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="geo" value="Географія">
                        <label class="form-check-label" for="geo">Географія</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="franc" value="Французька мова">
                        <label class="form-check-label" for="franc">Французька мова</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="spanish" value="Іспанська мова">
                        <label class="form-check-label" for="spanish">Іспанська мова</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="deutsch" value="Німецька мова">
                        <label class="form-check-label" for="deutsch">Німецька мова</label>
                        <br/>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg" id="Selection_btn">Підбір</button>
                </div>
            </div>
        </div>

    </div>
    <div id="bottom"></div>



    <script src="js/do.js"></script>
</body>


<footer>
    <?php require "footer.php";?>
</footer>
</html>
