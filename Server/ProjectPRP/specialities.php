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
<style>
#search_group{
    width: 100%;
margin-bottom: 5%;
    margin-top: 5%;
}
    #text{

       margin-left: 12%;
        width: 70%;
        border-radius: 20px 0px 0px 20px;
    }

    #Search_spec{
        border-radius: 20px 0px 0px 20px;
    }
    #Search_btn{
        width: 40px;
        border-radius: 0px 20px 20px 0px;
    }

    #card_all{

        align-content: center;
        border-radius: 20px;
        width: 90%;
    }
    #card_body{
        margin-left: 15%;
    }

    #selected{
        width: 100%;
    }

    #Selection_btn{

        margin-left: 10% ;
        width: 100%;
    }

    #bottom{
        text-align: center;
        align-content: center;
        align-items: center;
        align-self: center;
        width: 100%;

    }

    #tr_head{
        border-radius: 20px 20px 0px 0px;
    }
    th{
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }

    #body_table{
        border-radius: 20px 20px 0px 0px;
        text-align: center;
        background-color: #ffffff;
        width: 100%;
    }

    #table_info{
        width: 100%;
        align-content: center;
        text-align: center;

    }
    #main{
        margin-bottom: 5%;
        margin-top: 12%;
    }
</style>
<body>

    <div class="main" id="main">



            <div class="card" id="card_all">
                <div class="card-body" id="card_body">
                    <div id="text_teg"><h5 class="card-title"><h1><em>Підбір спеціальностей за предметами ЗНО</em></h1></h5></div>

                        <table id="selected">
                           <tr> <td>
                                   <div class="form-check">
                                       <br>
                        <h5><input type="checkbox" class="form-check-input" id="ukr_lang" value="Ukrainian_LanguageU" checked disabled>
                            <label class="form-check-label" for="ukr_lang">Українська мова та література</label></h5>


                         <h5>  <input type="checkbox" class="form-check-input" id="math" value="MathsU">
                        <label class="form-check-label" for="math" >Математика</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="history" value="HistoryU">
                        <label class="form-check-label" for="history">Історія України</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="english" value="EnglishU">
                        <label class="form-check-label" for="english">Англійська мова</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="chemistry" value="ChemistryU">
                        <label class="form-check-label" for="chemistry">Хімія</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="biology" value="BiologyU">
                        <label class="form-check-label" for="biology">Біологія</label>
                                       <br/></h5></div>
                            </td>
                            <td>
                        <h5><input type="checkbox" class="form-check-input" id="phyz" value="PhysicsU">
                        <label class="form-check-label" for="phyz">Фізика</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="geo" value="GeographyU">
                        <label class="form-check-label" for="geo">Географія</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="franc" value="Французька мова">
                        <label class="form-check-label" for="franc">Французька мова</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="spanish" value="Іспанська мова">
                        <label class="form-check-label" for="spanish">Іспанська мова</label>
                        <br/>

                        <input type="checkbox" class="form-check-input" id="deutsch" value="Німецька мова">
                        <label class="form-check-label" for="deutsch">Німецька мова</label></h5>
                    </div> </td></tr>


                    <tr><td>
                    <button type="button" class="btn btn-success btn-lg" id="Selection_btn">Підбір</button>
                        </td>  </tr>
                    </table>
                </div>
            </div>
    <div class="input-group" id="search_group">
        <div class="a" id="text"><input type="text" class="form-control" id="Search_spec" placeholder="Пошук спеціальностей" autofocus></div>
        <div class="input-group-append" ><button class="btn btn-success" type="button" id="Search_btn"><i class="fa fa-search"></i></button></div>
    </div>

    </div>

    <div id="bottom"></div>



    <script src="js/do.js"></script>
</body>


<footer>
    <?php require "footer.php";?>
</footer>
</html>
