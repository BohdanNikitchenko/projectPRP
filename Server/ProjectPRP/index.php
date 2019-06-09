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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <title>News</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        /* stylelint-disable selector-list-comma-newline-after */


        h1, h2, h3, h4, h5, h6 {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif;
        }


        @media (min-width: 768px) {
            .display-4 {
                font-size: 3rem;
            }
        }


        .nav-scroller .nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .nav-scroller .nav-link {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: .875rem;
        }

        .card-img-right {
            height: 100%;
            border-radius: 0 3px 3px 0;
        }

        .flex-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
        }

        .h-250 { height: 250px; }
        @media (min-width: 768px) {
            .h-md-250 { height: 250px; }
        }


        @media (min-width: 40em) {
            .blog-title {
                font-size: 3.5rem;
            }
        }

        .blog-pagination > .btn {
            border-radius: 2rem;
        }

    </style>
</head>

<body>
<header>
    <?php require "header.php";?>
</header>
<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <img src="img/zno_date.png" class="rounded" alt="..."></svg>
                </svg>
            </div>
            <div class="carousel-item">
                    <a href="http://testportal.gov.ua/2018/10/04/zno-2019-vazhlyva-informatsiya/" title="Важлива інформація" target="_blank"><img src="img/1zno.jpg" width="100%" height="100%"  class="rounded" alt="...">   </a>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <img src="img/zno_test2.jpg" class="rounded" alt="..."></svg>
                <div class="container">
                    <div class="carousel-caption text-left" style="color: #000000 ;padding-left: 270px;">
                        <h1>Найкраща підготовка - </h1>
                        <h3>Практика</h3>
                        <p><a class="btn btn-lg btn-primary" href="https://zno.osvita.ua/" role="button" target="_blank" >Читати більше</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <img src="img/znoTest.jpg" class="rounded" alt="..."></svg>
                <div class="container">
                    <div class="carousel-caption text-right" style="color: #000000">
                        <h1>Як пройшло перше ЗНО</h1>
                        <p><a class="btn btn-lg btn-primary" href="https://osvita.ua/test/answers/" role="button" target="_blank" >Читати більше</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">ЗНО</strong>
                        <h4 class="mb-0">
                            <a class="text-dark" href="http://testportal.gov.ua/2019/06/07/13226/" target="_blank">Правильні відповіді до тесту з біології</a>
                        </h4>
                        <div class="mb-1 text-muted">07.06.2019</div>
                        <p class="card-text mb-auto">Предметна фахова комісія УЦОЯО встановила правильні відповіді до завдань сертифікаційної роботи з біології. <a target="_blank" href="http://testportal.gov.ua/2019/06/07/13226/">Докладніше</a></p>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="img/biolog.png" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">ЗНО</strong>
                        <h4 class="mb-0">
                            <a class="text-dark" href="http://testportal.gov.ua/2019/06/05/pravylni-vidpovidi-do-zavdan-z-istoriyi-ukrayiny/" target="_blank">Правильні відповіді до тесту з історії України</a>
                        </h4>
                        <div class="mb-1 text-muted">05.06.2019</div>
                        <p class="card-text mb-auto">Предметна фахова комісія УЦОЯО встановила правильні відповіді до завдань сертифікаційної роботи з історії України. <a target="_blank" href="http://testportal.gov.ua/2019/06/05/pravylni-vidpovidi-do-zavdan-z-istoriyi-ukrayiny/">Докладніше</a></p>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="img/history.png" data-holder-rendered="true">
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">ЗНО</strong>
                        <h4 class="mb-0">
                            <a class="text-dark" href="http://testportal.gov.ua/2019/06/04/13136/" target="_blank">Кількість учасників ЗНО з історії України</a>
                        </h4>
                        <div class="mb-1 text-muted">04.06.2019</div>
                        <p class="card-text mb-auto">Свої знання з історії України демонстрували понад 222 тисячі осіб. <a href="http://testportal.gov.ua/2019/06/04/13136/ target="_blank"">Докладніше</a></p>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="img/history1.png" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">ЗНО</strong>
                        <h4 class="mb-0">
                            <a class="text-dark" href="http://testportal.gov.ua/2019/05/31/zno-z-fizyky-pravylni-vidpovidi/" target="_blank">Правильні відповіді до фізики</a>
                        </h4>
                        <div class="mb-1 text-muted">31.05.2019</div>
                        <p class="card-text mb-auto">Предметна фахова комісія УЦОЯО встановила правильні відповіді до завдань сертифікаційної роботи з фізики. <a target="_blank" href="http://testportal.gov.ua/2019/05/31/zno-z-fizyky-pravylni-vidpovidi/">Докладніше</a></p>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="img/physic.png" data-holder-rendered="true">
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php require "footer.php";?>
</footer>
</body>
</html>