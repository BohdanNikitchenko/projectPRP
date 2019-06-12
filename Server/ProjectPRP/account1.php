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
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<header>
    <?php require "header.php";?>
</header>
<body>

<div class="container emp-profile" style="background-color: #f2f2f2">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <?php if ($user["img"] == null) { ?>
                        <img src="img/student.png" class="rounded" style="width: 250px; height: 170px" alt="...">
                    <?php } else { ?>
                        <img src="ajax/user_image/<?php echo  $user['img']?>" class="rounded" style="width: 250px; height: 170px" alt="...">
                    <?php } ?>
                    <button class="file btn btn-lg btn-primary">
                        Виберіть фото
                        <input type="file" name="user_image" accept="image/jpeg,image/png"/>
                    </button>
                    <!--<button class="file btn-lg btn-primary" id="ChangePhotoBtn">
                        Змінити фото
                    </button>-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <?php
                    echo"<h4 id='SurNameh'>";
                    echo $user["SurName"];
                    echo "</h4>";

                    echo "<h5>";
                    echo $user["Name"];
                    echo "<h5>";
                    ?>
                    <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Особиста інформація</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Обране</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="button" class="profile-edit-btn"  data-toggle="modal" data-target="#exampleModal" id="EditBtn" name="btnAddMore" value="Редагувати профіль"/>
            </div>
        </div>
            <div class="col-md-8 ml-5 ">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row">
                            <div class="col-md-6">
                                <label>ФІО</label>
                            </div>
                            <div class="col-md-6">
                                <?php
                                echo"<p id='p1'>".$user["SurName"]." ".$user["Name"]." ".$user["ThierdName"]."</p>";
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <?php
                                echo "<p>".$user['Email']."</p>";
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Телефон</label>
                            </div>
                            <div class="col-md-6">
                                <?php
                                echo "<p>".$user['PHONE']."</p>";
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                echo "<label>".$user['Subj1']."</label>";
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                echo "<p>".$user['Subj1Mark']."</p>";
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                echo "<label>".$user['Subj2']."</label>";
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                echo "<p>".$user['Subj2Mark']."</p>";
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                echo "<label>".$user['Subj3']."</label>";
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                echo "<p>".$user['Subj3Mark']."</p>";
                                ?>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Experience</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Hourly Rate</label>
                            </div>
                            <div class="col-md-6">
                                <p>10$/hr</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Projects</label>
                            </div>
                            <div class="col-md-6">
                                <p>230</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>English Level</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Availability</label>
                            </div>
                            <div class="col-md-6">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br/>
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



<!-- Modal -->
<!--Редактирование-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Редактирование</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="#">

                    <div class="form-group">
                        <i class="fa fa-user fa" aria-hidden="true">
                        </i><label for="name" class="cols-sm-2 control-label ml-2">Прізвище:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <?php
                                echo "<input type=\"text\" class=\"form-control\" name=\"name\"  id=\"SerName\" value=\"".$user["SurName"]."\"placeholder='Прізвище'/>";
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-user fa" aria-hidden="true">
                        </i><label for="name" class="cols-sm-2 control-label ml-2">Ім'я:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <?php
                                echo "<input type=\"text\" class=\"form-control\" name=\"name\"  id=\"name\" value=\"".$user["Name"]."\"placeholder=\"Ім'я\"/>";
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-user fa" aria-hidden="true">
                        </i><label for="name" class="cols-sm-2 control-label ml-2">По-батькові:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <?php
                                echo "<input type=\"text\" class=\"form-control\" name=\"name\"  id=\"ThirdName\" value=\"".$user["ThierdName"]."\"placeholder='По-батькові'/>";
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-envelope fa" aria-hidden="true"></i>
                        <label for="email" class="cols-sm-2 control-label ml-1">Email:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <?php
                                echo "<input type=\"text\" class=\"form-control\" name=\"email\"  id=\"email\" value=\"".$user["Email"]."\"placeholder='Email'/>";
                                ?>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <label for="email" class="cols-sm-2 control-label ml-1">Телефон:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <?php
                                echo "<input type=\"text\" class=\"form-control\" name=\"phone\"  id=\"phone\" value=\"".$user["PHONE"]."\"placeholder='Телефон'/>";
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                        <label for="password" class="cols-sm-2 control-label ml-1">Пароль:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password" data-toggle="popover" placeholder="Поточний пароль"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                        <label for="confirm" class="cols-sm-2 control-label ml-1">Новий пароль:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input type="password" class="form-control" name="confirm"  id="NewPassword"  placeholder="Confirm your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <label for="confirm" class="cols-sm-2 control-label ml-1">Обереріть предмет ЗНО та вкажіть бал:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <p><strong>Choose Subject</strong></p>
                                <p>
                                    <select id="selectSubj1" style=" width: 500px;  padding: 10px;  border-top-left-radius: 0;border-top-right-radius: 0;" class="selectSubj" name="hero">
                                        <option value="Українська мова та література" selected="">Українська мова та література</option>
                                        <option value="Математика">Математика</option>
                                        <option value="Історія України">Історія України</option>
                                        <option value="Англійська мова">Англійська мова</option>
                                        <option value="Фізика">Фізика</option>
                                        <option value="Біологія">Біологія</option>
                                        <option value="Географія">Географія</option>
                                        <option value="Хімія">Хімія</option>
                                    </select>
                                    <input type="number" value="100" width="200" height="10px" id="Subj1Mark" min="100" max="200" step="1" data-bind="value:replyNumber">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <label for="confirm" class="cols-sm-2 control-label ml-1">Обереріть предмет ЗНО та вкажіть бал:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <p><strong>Choose Subject</strong></p>
                                <p>
                                    <select id="selectSubj2" style=" width: 500px;  padding: 10px;  border-top-left-radius: 0;border-top-right-radius: 0;" class="selectSubj" name="hero">
                                        <option value="Українська мова та література" selected="">Українська мова та література</option>
                                        <option value="Математика">Математика</option>
                                        <option value="Історія України">Історія України</option>
                                        <option value="Англійська мова">Англійська мова</option>
                                        <option value="Фізика">Фізика</option>
                                        <option value="Біологія">Біологія</option>
                                        <option value="Географія">Географія</option>
                                        <option value="Хімія">Хімія</option>
                                    </select>
                                    <input type="number" value="100" width="200" height="10px" id="Subj2Mark" min="100" max="200" step="1" data-bind="value:replyNumber">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <label for="confirm" class="cols-sm-2 control-label ml-1">Обереріть предмет ЗНО та вкажіть бал:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <p><strong>Choose Subject</strong></p>
                                <p>
                                    <select id="selectSubj3" style=" width: 500px;  padding: 10px;  border-top-left-radius: 0;border-top-right-radius: 0;" class="selectSubj" name="hero">
                                        <option value="Українська мова та література" selected="">Українська мова та література</option>
                                        <option value="Математика">Математика</option>
                                        <option value="Історія України">Історія України</option>
                                        <option value="Англійська мова">Англійська мова</option>
                                        <option value="Фізика">Фізика</option>
                                        <option value="Біологія">Біологія</option>
                                        <option value="Географія">Географія</option>
                                        <option value="Хімія">Хімія</option>
                                    </select>
                                    <input type="number" value="100" width="200" height="10px" id="Subj3Mark" min="100" max="200" step="1" data-bind="value:replyNumber">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button"   id="SaveEditBtn" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/do.js"></script>
</body>
<footer>
    <?php require "footer.php";?>
</footer>
</html>
