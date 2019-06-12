<?php
session_start();
if(isset($_SESSION["loggedUser"])){
    $user=$_SESSION["loggedUser"];
}
$subjects = array('Математика', 'Історія України', 'Англійська мова', 'Фізика', 'Біологія', 'Географія', 'Хімія');
    /*$univer = $_SESSION["SpecRate"];*/
    //print_r($subjects);
/*foreach ($subjects as $subject){
    if($subject == $user['Subj3']){
        echo $subject;
    }
}*/
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
                    <option value= <?php echo $specialty["Id_specialty"]?>><?php echo $specialty["Name_Specialty"]?></option>
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
                <div class="form-group">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <label for="confirm" class="cols-sm-2 control-label ml-1">Обереріть предмет ЗНО та вкажіть бал:</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                                <select id="selectSubj1" style=" width: 500px;  padding: 10px;  border-top-left-radius: 0;border-top-right-radius: 0;" class="selectSubj" name="hero">
                                    <option value="Українська мова та література" selected="">Українська мова та література</option>
                                </select>
                                <?php if(isset($user['Subj1Mark'])){ ?>
                                    <input type="number" value=<?php echo $user['Subj1Mark'];?> width="200" height="10px" id="Subj1Mark" min="100" max="200" step="1" data-bind="value:replyNumber">
                                <?php }else{ ?>
                                    <input type="number" value="100" width="200" height="10px" id="Subj1Mark" min="100" max="200" step="1" data-bind="value:replyNumber">
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <label for="confirm" class="cols-sm-2 control-label ml-1">Обереріть предмет ЗНО та вкажіть бал:</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                                <select id="selectSubj2" style=" width: 500px;  padding: 10px;  border-top-left-radius: 0;border-top-right-radius: 0;" class="selectSubj" name="hero">
                                    <?php if(isset($user['Subj2'])){
                                        if($user['Subj2'] == 'Математика'){ ?>
                                            <option value="Математика" selected="">Математика</option>
                                            <option value="Історія України">Історія України</option>
                                        <?php }else{ ?>
                                            <option value="Математика">Математика</option>
                                            <option value="Історія України" selected="">Історія України</option>
                                    <?php }
                                    }else{ ?>
                                        <option value="Математика" >Математика</option>
                                        <option value="Історія України" selected="">Історія України</option>
                                    <?php } ?>
                                </select>
                            <?php if(isset($user['Subj2Mark'])){ ?>
                                <input type="number" value=<?php echo $user['Subj2Mark'];?> width="200" height="10px" id="Subj2Mark" min="100" max="200" step="1" data-bind="value:replyNumber">
                            <?php }else{ ?>
                                <input type="number" value="100" width="200" height="10px" id="Subj2Mark" min="100" max="200" step="1" data-bind="value:replyNumber">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <label for="confirm" class="cols-sm-2 control-label ml-1">Обереріть предмет ЗНО та вкажіть бал:</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <select id="selectSubj3" style=" width: 500px;  padding: 10px;  border-top-left-radius: 0;border-top-right-radius: 0;" class="selectSubj" name="hero">
                                <?php if(isset($user['Subj3'])){
                                    foreach ($subjects as $subject){
                                        if($user['Subj3'] == $subject){ ?>
                                            <option selected="" value=<?php echo $subject; ?>><?php echo $subject; ?></option>
                                        <?php }else{ ?>
                                            <option value=<?php echo $subject; ?>><?php echo $subject; ?></option>
                                        <?php }
                                    } ?>
                                <?php }else{ ?>
                                    <option value="Математика" >Математика</option>
                                    <option value="Історія України">Історія України</option>
                                    <option value="Англійська мова" selected="">Англійська мова</option>
                                    <option value="Фізика">Фізика</option>
                                    <option value="Біологія">Біологія</option>
                                    <option value="Географія">Географія</option>
                                    <option value="Хімія">Хімія</option>
                                <?php } ?>
                            </select>
                            <?php if(isset($user['Subj3Mark'])){ ?>
                                <input type="number" value=<?php echo $user['Subj3Mark'];?> width="200" height="10px" id="Subj3Mark" min="100" max="200" step="1" data-bind="value:replyNumber">
                            <?php }else{ ?>
                                <input type="number" value="100" width="200" height="10px" id="Subj3Mark" min="100" max="200" step="1" data-bind="value:replyNumber">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <label for="confirm" class="cols-sm-2 control-label ml-1">Обереріть вкажіть бал атестата:</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                                <input type="number" value="100" width="200" height="10px" id="Subj4Mark" min="100" max="200" step="1" data-bind="value:replyNumber">
                        </div>
                    </div>
                </div>
                <input type="button" class="btn btn-primary" id="btnRes" value="Розрахувати вірогідність" />
            </div>
        </div>
    </div>
    </form>
    <div id="result" style="display: none">
    </div>
</main>
    <footer>
        <?php require "footer.php";?>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/calculation.js"></script>
</body>
</html>