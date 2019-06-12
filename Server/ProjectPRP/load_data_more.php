<?php
$dbhost = "localhost";
$dbname="users";
$username="root";
$password="";

$connect = mysqli_connect($dbhost,$username,$password,$dbname);
$connect->query("SET CHARACTER SET 'utf8'");
$output = '';
$id_list = '';
$sql = $_POST['sql'];
$id = $_POST['id'];
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result))
    {
        global $id_list;
        $id_list=$row['id'];

        $output .= '<tbody>'
?>
        <div class="container emp-profile" id="contain_prof">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <div class="teg">
                                    <h5><em><?php echo $row["Name_Universities"] ?></em></h5>
                                </div>
                            </div>
                            <div class="form-group col-md">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div id="favorite">
                                            <style>
                                                #favorite {
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


                                            <i onclick="myFunction(this,<?php echo $row["favorite"]; ?>)"
                                               class="fa <?php

                                               if ($row["favorite"] == "1") {

                                                   echo "fa-thumbs-up";
                                               } else {
                                                   echo "fa-thumbs-down";
                                               }

                                               ?>
                                           fa-3x " id="like_button"
                                               value="<?php echo $row["favorite"]; ?>"></i>



                                            <div value="<?php echo $row['id'] ?>" id="getId"></div>
                                            <script>

                                                function myFunction(x, y) {

                                                    if (y == 1) {
                                                        x.classList.toggle("fa-thumbs-down");
                                                        x.classList.toggle("fa-thumbs-up");

                                                    } else {
                                                        x.classList.toggle("fa-thumbs-down");
                                                        x.classList.toggle("fa-thumbs-up");
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
                                             src="https://t.fakku.net/images/upload/heartpupils-tag.png"
                                             alt="Generic placeholder thumbnail">
                                    </div>
                                </div>
                                <div class="form-group col-md-6" id="info" name="info">


                                    <label for="inputPassword4">
                                        <h5>Область, населений пункт:
                                            <small>
                                                <em><?php echo $row["Region_U"], ", ", $row["City_U"] ?></em>
                                            </small>
                                        </h5>
                                    </label><br>
                                    <label for="inputPassword4">
                                        <h5>Адреса:
                                            <small><em><?php echo $row["Address_U"] ?></small>
                                            </em></h5>
                                    </label><br>
                                    <label for="inputPassword4">
                                        <h5>Телефони:
                                            <small><em><?php echo $row["Phone_U"] ?></small>
                                            </em></h5>
                                    </label><br>
                                    <label for="inputPassword4">
                                        <h5>Веб-сайт:
                                            <small>
                                                <em><a href="<?php echo $row["Web_U"] ?>"><?php echo $row["Web_U"] ?></a>
                                            </small>
                                            </em></h5>
                                    </label><br>
                                    <label for="inputPassword4"><h5>Опис ВНЗ: </h5></label><br>
                                    <label for="inputPassword4">
                                        <h7>
                                            <ul>
                                                <li>Тип ВНЗ:
                                        </h7>
                                        <em><?php echo $row["Type_U"] ?></em></label><br>
                                    <label for="inputPassword4">
                                        <h7>
                                            <li>Форма власності:
                                        </h7>
                                        <em>
                                            <h7><?php echo $row["Control_Form_U"] ?></em></label><br>
                                    <label for="inputPassword4">
                                        <h7>
                                            <li>Керівник:
                                        </h7>
                                        <em><?php echo $row["Director_U"] ?></em></ul></label><br>


                                </div>
                            </div>
                            <style>
                                #info_button {
                                    width: 100%;
                                }

                                #buttoninfo {
                                    width: 100%;
                                }
                            </style>
                            <div id="info_button">

                                <a href="univer.php?id=<?php echo $row['id'] ?>"
                                   class="btn btn-success  active" role="button" aria-pressed="true"
                                   id="buttoninfo"><em>Детальніше</em></a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <?php
        '<tbody>';
    }
    $sql =substr($sql, 0,-10).$id_list."' LIMIT 2";
    $output .= '<tbody>'
        ?>
    <div class="container emp-more" id="conteiner_more">
        <div class="card mb-4 shadow-sm">

            <button id="btn_more" name="btn_more"  value="<?php echo $sql?>" class="btn btn-success form-control"  >Load All</button>
            <button id="button_value" value="<?php echo $id_list;?>" hidden >
            </button>
        </div>
    </div>


<?php
    '<tbody>';


    echo $output;
}
?>