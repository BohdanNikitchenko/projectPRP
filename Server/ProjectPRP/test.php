<?php
session_start();
$user=$_SESSION["loggedUser"];
$array = array(
    0 => array("Українська мова і література","https://zno.osvita.ua/ukrainian/299/","https://zno.osvita.ua/ukrainian/309/","https://zno.osvita.ua/ukrainian/281/"),
    1 => array("Математика","https://zno.osvita.ua/mathematics/298/","https://zno.osvita.ua/mathematics/310/","https://zno.osvita.ua/mathematics/290/"),
    2 => array("Історія України","https://zno.osvita.ua/ukraine-history/305/","https://zno.osvita.ua/ukraine-history/315/","https://zno.osvita.ua/ukraine-history/282/"),
    3 => array("Географія","https://zno.osvita.ua/geography/306/","https://zno.osvita.ua/geography/316/","https://zno.osvita.ua/geography/287/"),
    4 => array("Біологія","https://zno.osvita.ua/biology/304/","https://zno.osvita.ua/biology/313/","https://zno.osvita.ua/biology/288/"),
    5 => array("Фізика","https://zno.osvita.ua/physics/307/","https://zno.osvita.ua/physics/318/","https://zno.osvita.ua/physics/291/"),
    6 => array("Хімія","https://zno.osvita.ua/chemistry/308/","https://zno.osvita.ua/chemistry/328/","https://zno.osvita.ua/chemistry/289/"),
    7 => array("Англійська мова","https://zno.osvita.ua/english/303/","https://zno.osvita.ua/english/311/","https://zno.osvita.ua/english/277/"),
    8 => array("Німецька мова","https://zno.osvita.ua/german/300/","https://zno.osvita.ua/german/314/","https://zno.osvita.ua/german/278/"),
    9 => array("Французька мова","https://zno.osvita.ua/french/301/","https://zno.osvita.ua/french/317/","https://zno.osvita.ua/french/279/"),
    10 => array("Іспанська мова","https://zno.osvita.ua/spanish/302/","https://zno.osvita.ua/spanish/312/","https://zno.osvita.ua/spanish/280/")
);
?>
<!DOCTYPE html>
<html>
<head>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/test.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<header>
    <?php require "header.php";?>
</header>
<body>
<div class="container emp-profile">

<?php
        for($i=0; $i<count($array); $i++):
            ?>
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php

                echo $array[$i][0] ?></h4>
        </div>
        <?php
        for($j=1; $j<count($array[$i]); $j++):
        ?>
        <div class="card-body">
            <table class = "tests" name = "tests">
            <td class="td_1"><h4 class="card-title pricing-card-title">Тест № <?php echo $j ?></h4></td>
          <td class="td_2"><button type="button" class="btn btn-lg btn-block btn-outline-primary" onClick='location.href="<?php echo $array[$i][$j] ?>"'>Перейти по посиланню</button></td>
                <td>
                    <div class="container">
                        <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="2">
                    </div>
                </td>
            </table>
        </div>
        <?php endfor; ?>
    </div>
<?php endfor; ?>
</div>
</body>
<footer>
    <?php require "footer.php";?>
</footer>
</html>