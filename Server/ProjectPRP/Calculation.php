<?php
session_start();
$user=$_SESSION["loggedUser"];
$calc=$_SESSION["calc"];
$univer = $_SESSION["SpecRate"];
print_r($univer);
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/calculation.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>
<header>

    <?php require "Calculation_features.php";
    require "header.php";?>
</header>
<main role="main">
    <form method="post">
    <div class="container">
<div class="card mt-5 ">
    <h5 class="card-header">ЗВО</h5>
    <div class="card-body">
        <h5 class="card-title">Оберіть ЗВО із запропонованого списку</h5>
        <div class="input-group mb-3">
            <input class="select" type="text" name="city" id="inputUniver" list="inputGroupSelect01">
            <datalist class="select" id="inputGroupSelect01" style="width: 25%" >
                <!--  ЦИКЛЫ  -->

                <?php
                $universities = get_universities_all();
                //$count = 0;
                foreach ($universities as $univer):
                /*if($count == 0){
                    echo '<script type="text/javascript">alert("' . $univer["Name_Universities"] . '")</script>';
                    $count++;
                }*/
                ?>
                <option><?php echo $univer["Name_Universities"]?></option>
                <?php endforeach; ?>
            </datalist>
            <div class="input-group-append">
                <input type="button" class="input-group-text" id="elem"  for="inputGroupSelect02" value="Обрати"/>
            </div>
        </div>
    </div>
</div>
<div class="card mt-5">
    <h5 class="card-header">Спеціальності</h5>
    <div class="card-body">
        <h5 class="card-title">Оберіть спеціальність із запропонованого списку</h5>
        <div class="input-group mb-3">
            <input class="select" type="text" name="city" id="inputSpec" list="inputGroupSelect02">
            <datalist class="select" id="inputGroupSelect02" >
                <!--  ЦИКЛЫ  -->
                <?php
                $specialtyes = get_specialty_all();
                //$count = 0;
                foreach ($specialtyes as $specialty):
                    /*if($count == 0){
                        echo '<script type="text/javascript">alert("' . $univer["Name_Universities"] . '")</script>';
                        $count++;
                    }*/
                    ?>
                    <option value=<?php echo $specialty["Id_specialty"]?>><?php echo $specialty["Name_Specialty"]?></option>
                <?php endforeach; ?>
            </datalist>
            <div class="input-group-append">
                <input type="button" class="input-group-text" for="inputGroupSelect02" value="Обрати"/>
            </div>
        </div>
    </div>
</div>
        <div class="card mt-5 mb-5">
            <h5 class="card-header">Ваші бали ЗНО</h5>
            <div class="card-body">
                <h5 class="card-title">Предмети для розрахунку</h5>
                <div class="row">
                    <div class="col">
                        <label>srtgdsr</label>
                    </div>
                    <div class="col">
                        <p>100</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>srtgdsr</label>
                    </div>
                    <div class="col">
                        <p>100</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>srtgdsr</label>
                    </div>
                    <div class="col">
                        <p>100</p>
                    </div>
                </div>
                <input type="button"  class="btn btn-primary" id="btnRes" value="Розрахувати вірогідність" />
            </div>
        </div>
    </div>
    </form>
    <div id="result" style="display: none">
        <?php foreach ($calc as $c):?>
        <p><?php echo $c?></p>
        <?php endforeach;?>
    </div>
</main>
    <footer>
        <?php require "footer.php";?>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/calculation.js"></script>
</body>

</html>