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

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">AbitPro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ml-2 " >
                    <a class="nav-link" href="index.php">Новости </a>
                </li>
                <li class="nav-item dropdown ml-2 ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ЗНО
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Загальна информація</a>
                        <a class="dropdown-item" href="#">Предмети ЗНО</a>
                        <a class="dropdown-item" href="test.php">Тести</a>
                    </div>
                </li>
                <li class="nav-item ml-2 ">
                    <a class="nav-link" href="#">Спеціальності</a>
                </li>
                <li class="nav-item dropdown ml-2 ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ЗВО
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="vnz.php">Перелік ЗВО</a>
                    <a class="dropdown-item" href="#">Рейтинги</a>
                </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0 mr-5" type="button" onclick='location.href="registration.php"' id="btn_reg">Зареєструватися</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick='location.href="autorization.php"' id="btn">Увійти</button>
            </form>
        </div>
    </nav>

    <style>
        #btn_reg{
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

        #btn{
            color: #fff;
            border-color: #4cae4c;
        }


    </style>


    <script type="text/javascript" src="js/code.js"></script>



    <title>Особистий кабінет</title>
    <link rel="shortcut icon" href="photo_2019-05-24_00-38-31.png" type="image/png">
</head>
<body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/do.js"></script>

</body>
</html>
