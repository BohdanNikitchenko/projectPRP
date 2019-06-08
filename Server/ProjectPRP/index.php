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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<header>
    <?php require "header.php";?>
</header>

<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Змінити фото
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <?php
                    echo"<h4>";
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
                <input type="button" class="profile-edit-btn " name="btnAddMore" value="Редагувати профіль"/>
            </div>
        </div>
        <div class="col-md-8 ml-5 ">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="row">
                        <div class="col-md-6">
                            <label>ФІО:</label>
                        </div>
                        <div class="col-md-6">
                            <?php
                            echo"<p>".$user["SurName"]." ".$user["Name"]." ".$user["ThierdName"]."</p>";
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email:</label>
                        </div>
                        <div class="col-md-6">
                            <?php
                            echo "<p>".$user['Email']."</p>";
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Телефон:</label>
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
                            echo "<label>".$user['Subj1'].":"."</label>";
                            ?>
                        </div>
                        <div class="col-md-6">
                            <p>Web Developer and Designer</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            echo "<label>".$user['Subj2'].":"."</label>";
                            ?>
                        </div>
                        <div class="col-md-6">
                            <p>Web Developer and Designer</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            echo "<label>".$user['Subj3'].":"."</label>";
                            ?>
                        </div>
                        <div class="col-md-6">
                            <p>Web Developer and Designer</p>
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
<footer>
    <?php require "footer.php";?>
</footer>
</body>