<?php
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/subject.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Рейтинги ЗВО</title>
</head>

<body>
<header>
    <?php require "header.php";?>
</header>
<main role="main">
    <div class="container">
        <div class="modal-body">
            <div class="col">
                <a href="#en">Англійська мова</a>
                <a href="#bio">Біологія</a>
                <a href="#geo">Географія</a>
                <a href="#isp">Іспанська мова</a>
            </div>
            <div class="col">
                <a href="#ist">Історія України</a>
                <a href="#mat">Математика</a>
                <a href="#nim">Німецька мова</a>
                <a href="#ukr">Українська мова та література</a>
            </div>
            <div class="col">
                <a href="#phis">Фізика</a>
                <a href="#fr">Французька мова</a>
                <a href="#chim">Хімія</a>
            </div>
        </div>

        <a name="en"></a>
        <div class="card mt-5">
            <h5 class="card-header">Англійська мова</h5>
            <table class="table table-striped" id="tab1">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Розуміння мови на слух(аудіювання), читання і письмо.</td>
                    <td>
                        <a href="http://testportal.gov.ua//wp-content/uploads/2016/12/Programa_2020_inozemni.pdf">Детальніше...</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <a name="bio"></a>
        <div class="card mt-5">
            <h5 class="card-header">Біологія</h5>
            <table class="table table-striped" id="tab2">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $ist=array(
                    array(1,"Вступ. Хімічний склад, структура і функціонування клітин. Реалізація спадкової інформації.","http://interactive.ranok.com.ua/course/pdrychniki/bologya-9-klas-pdrychnik-k-m-zadorozhniyi"),
                    array(2,"Закономірності спадкової мінливості.","https://history.vn.ua/pidruchniki/zadorozhnij-biology-and-ecology-10-class-2018-standard-level/38.php"),
                    array(3,"Біорізноманіття.","https://ruslo.info/uk/bioriznomanittya/shcho-take-bioriznomanittia/"),
                    array(4,"Організм людини як біологічна система.","https://pidruchniki.com/77385/prirodoznavstvo/organizm_lyudini_tsilisna_biologichna_sistema"),
                    array(5,"Основи екології і еволюційного вчення.","http://zno.academia.in.ua/mod/book/view.php?id=2370"));
                for($row=0;$row<5;$row++){
                    echo "<tr>";
                    for ($col = 0; $col < 2; $col++) {
                        echo "<td>".$ist[$row][$col]."</td>";
                    }
                    echo "<td><a href=".$ist[$row][2].">Детальніше...</a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>

        <a name="geo"></a>
        <div class="card mt-5">
            <h5 class="card-header">Географія</h5>
            <table class="table table-striped" id="tab3">
                <thead>
                <tr >
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $ist=array(
                    array(1,"Загальна географія","https://courses.ed-era.com/courses/EdEra/g102/G102/about"),
                    array(2,"Географія материків і океанів","http://ukrmap.com.ua/catalog/navchalna-produktsija/elektronni-navchalni-posibniki/geografija-materikiv-i-okeaniv-navchalnij-elektronnij-posibnik-7-klas/?id=651"),
                    array(3,"Фізична географія України","https://pidruchniki.com/00000000/geografiya/geografiya_ukrayini"),
                    array(4,"Населення України та світу","https://geografiamozil2.jimdo.com/головна/населення-світу-та-україни-і-частина/"),
                    array(5,"Україна і світове господарство","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjg2cDe-t_iAhWRlIsKHYtrA5MQFjAAegQIAxAB&url=https%3A%2F%2Fbuklib.net%2Fbooks%2F31857%2F&usg=AOvVaw2-UiqUe9zG7fuoPEsR3-6o"),
                    array(6,"Регіони та країни","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=6&cad=rja&uact=8&ved=2ahUKEwiO8pzn-t_iAhVB_CoKHUI_D7AQFjAFegQICRAB&url=http%3A%2F%2Fshkola.ostriv.in.ua%2Fpublication%2Fcode-17FD13EFBEA3C%2Flist-B65BB05F26&usg=AOvVaw3r5tySdsvb-4pMdQcriFx8"));
                for($row=0;$row<6;$row++){
                    echo "<tr>";
                    echo "<td>".$ist[$row][0]."</td>";
                    echo "<td>".$ist[$row][1]."</td>";
                    echo "<td><a href=".$ist[$row][2].">Детальніше...</a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>

        <a name="isp"></a>
        <div class="card mt-5">
            <h5 class="card-header">Іспанська мова</h5>
            <table class="table table-striped" id="tab4">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Розуміння мови на слух(аудіювання), читання і письмо.</td>
                    <td><a href="http://testportal.gov.ua//wp-content/uploads/2016/12/Programa_2020_inozemni.pdf">Детальніше...</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <a name="ist"></a>
        <div class="card mt-5">
            <h5 class="card-header">Історія України</h5>
            <table class="table table-striped" id="tab5">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $ist=array(
                        array(1,"Вступ до історії","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwi7mbiH-9_iAhUytIsKHcfmAn0QFjABegQIAhAB&url=https%3A%2F%2Fistzno.dp.ua%2Flesson%2Ftema-1-vstup-do-istoriyi-ukrayini-2&usg=AOvVaw2jpvpmJnEQ1-4QenAfN87Y"),
                        array(2,"Стародавня історія України","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjkz8ai-9_iAhVw-ioKHWEYAiIQFjAAegQIBBAB&url=https%3A%2F%2Fistzno.dp.ua%2Flesson%2Ftema-2-starodavnya-istoriya-ukrayini-2&usg=AOvVaw3-hYPZTnfvFR6NOvKgIpjH"),
                        array(3,"Русь-Україна(Київська держава)","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=13&cad=rja&uact=8&ved=2ahUKEwjZwa-p-9_iAhXusIsKHcNNDmwQFjAMegQIARAB&url=http%3A%2F%2Fhistory.org.ua%2F%3Ftermin%3DKyivska_Rus&usg=AOvVaw0qVm_NahvGI2DUF5c_M0qR"),
                        array(4,"Королівство Руське(Галицько-Волинська держава). Монгольська навала","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwi7nsi0-9_iAhWNtIsKHT9yAt4QFjAAegQIAxAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Fview.php%3Fid%3D106&usg=AOvVaw3DHAsYTPH-LyhIceMAAulp"),
                        array(5,"Руські удільні князівства у складі іноземних держав у другій половині XIV - першої половини XVI ст. Кримське ханство","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjivqO8-9_iAhV2AxAIHafGAvoQFjAAegQIBRAB&url=http%3A%2F%2Fznohistory.ed-era.com%2Fm1%2Fl5&usg=AOvVaw2W0KwkvoPJA6zMDfeshgsc"),
                        array(6,"Українські землі у складі Речі Посполитої в другій половині XVI ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwia75zE-9_iAhVxmIsKHdozBYkQFjAAegQIBBAB&url=http%3A%2F%2Fznohistory.ed-era.com%2Fm2%2Fl6&usg=AOvVaw0UITA39Es93nCuNXVRfzi3"),
                        array(7,"Українські землі у складі Речі Посполитої в першій половині XVIІ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwiAg4fN-9_iAhVNlIsKHWOWCEYQFjAAegQIABAB&url=http%3A%2F%2Fznohistory.ed-era.com%2Fm2%2Fl7&usg=AOvVaw39Enb7Ch49gT0SB_UAc0Fc"),
                        array(8,"Національно визвольна війна XVIІ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwic9uHW-9_iAhVukosKHT-GBjIQFjAAegQIBBAB&url=http%3A%2F%2Fznohistory.ed-era.com%2Fm2%2Fl8&usg=AOvVaw3m7rmsrSSsoZfU6icLIGA4"),
                        array(9,"Козацька Україна наприкінці 50 - 80-х рр. XVIІ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=2ahUKEwivvsjf-9_iAhVjsYsKHfxuDv4QFjACegQIAxAB&url=http%3A%2F%2Fznohistory.ed-era.com%2Fm2%2Fl9&usg=AOvVaw0mSIcv15wIteV7ej6M8y0P"),
                        array(10,"Українські землі наприкінці XVIІ - в першій половині XVIІІ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=10&cad=rja&uact=8&ved=2ahUKEwin9NHn-9_iAhUDtosKHYDLArAQFjAJegQIAhAB&url=http%3A%2F%2Fznohistory.ed-era.com%2Fm2%2Fl10&usg=AOvVaw1o0EoaAbrkxEIpiRLmHSxW"),
                        array(11,"Українські землі в другій половині XVIІІ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=12&cad=rja&uact=8&ved=2ahUKEwjm5fDx-9_iAhVJkMMKHaPRBvUQFjALegQIBBAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Fview.php%3Fid%3D117&usg=AOvVaw1nQ9Hgy1UyHF-IVAxOp_bU"),
                        array(12,"Українські землі у складі Російської імперії наприкінці XVIІІ - в перші половині ХІХ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwjJl5P9-9_iAhXtkYsKHUrrAeEQFjABegQIBhAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Fview.php%3Fid%3D3386&usg=AOvVaw0WzScqORI_Xe1ofwOvyrqW"),
                        array(13,"Українські землі у складі Австрійської імперії наприкінці XVIІІ - в перші половині ХІХ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwin7OWH_N_iAhU5i8MKHbsTDAsQFjAAegQIARAB&url=http%3A%2F%2Fznohistory.ed-era.com%2Fm3%2Fl13-l14&usg=AOvVaw06eflGICubF81NeKieh3LF"),
                        array(14,"Культура України кінця XVIІ - першої половини ХІХ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwj1lOWP_N_iAhUKxosKHV6vAmcQFjABegQIAxAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Fview.php%3Fid%3D116&usg=AOvVaw3mswiWwEGHWskZSDz3excz"),
                        array(15,"Українські землі у складі Російської імперії в другій половині ХІХ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjyjO-a_N_iAhUJqYsKHUw0DNsQFjAAegQIAhAB&url=https%3A%2F%2Fstudfiles.net%2Fpreview%2F5128283%2Fpage%3A28%2F&usg=AOvVaw3n_ROolhYCrx8HS5KSuKIj"),
                        array(16,"Українські землі у складі Австо-Угорщини в другій половині ХІХ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwi8vMCh_N_iAhWw_CoKHQpJDNIQFjAAegQIAxAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Fview.php%3Fid%3D121&usg=AOvVaw3uPP1KPYMJlnRyWviVqVW7"),
                        array(17,"Культура України в другій половині ХІХ - на початку ХХ ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwiP86az_N_iAhUJlIsKHXf9D8UQFjABegQIABAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Fview.php%3Fid%3D124&usg=AOvVaw2f_QV08oXgS8ouMBnlIHVv"),
                        array(18,"Українські землі у складі Російської імперії в 1900 - 1914 рр.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwjdsNK7_N_iAhUEl4sKHaTYB6YQFjABegQIAhAB&url=http%3A%2F%2Fznohistory.ed-era.com%2Fm4%2Fl18-l19&usg=AOvVaw1fS7Zg13mi4vJxwI8gUYoU"),
                        array(19,"Українські землі у складі Австро-Угорщини в 1900 - 1914 рр.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjCm7fJ_N_iAhWtl4sKHWMmCBUQFjAAegQIABAB&url=http%3A%2F%2Fznohistory.ed-era.com%2Fm4%2Fl18-l19&usg=AOvVaw1fS7Zg13mi4vJxwI8gUYoU"),
                        array(20,"Україна в роки Першої світової війни","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwj3usvV_N_iAhUilYsKHRGfBt4QFjABegQIAxAB&url=http%3A%2F%2Fhistory.org.ua%2F%3Ftermin%3DPersha_svitova&usg=AOvVaw1PTEU5hG7_zUL8bk6pdYhF"),
                        array(21,"Початок Української революції","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=2ahUKEwjgqr_f_N_iAhUqpYsKHVqtBU4QFjACegQIBRAB&url=http%3A%2F%2Fwww.memory.gov.ua%2Fpage%2Fukrainska-revolyutsiya-1917-21&usg=AOvVaw2jeFLTXdXUI65XEgkQ_r30"),
                        array(22,"Розгортання Української революції. Боротьба за відновлення державності","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=4&cad=rja&uact=8&ved=2ahUKEwjtwe7r_N_iAhVll4sKHQ3MAwsQFjADegQIBhAB&url=http%3A%2F%2Finteractive.ranok.com.ua%2Ftheme%2Fcontentview%2Fpdrychniki%2Fstorya-ykrani-proflniyi-rven-pdrychnik-dlya-10-klasy-zakladv-zagalno-seredno-osvti%2F9408-testov-zavdannya-dlya-pdgotovki-do-tematichnogo-otsnyuvannya-za-rozdlom-iii-rozgortannya-ykransko-revolyuts-borotba-za-ykransky-derzhavnst%2F16510-testov-zavdannya-dlya-pdgotovki-do-tematichnogo-otsnyuvannya-za-rozdlom-iii-rozgortannya-ykransko-revolyuts-borotba-za-ykransky-derzhavnst&usg=AOvVaw2mDYZJGy-rlhQV1je1m7qw"),
                        array(23,"Встановлення комуністичного тоталітарного режиму в Україні","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwi2poX5_N_iAhWmtYsKHUatBkQQFjAAegQIARAB&url=http%3A%2F%2Fistoryk.in.ua%2Futverdzhennya-totalitarnogo-rezhimu-v-ukrayini-u-1920-1930-h-rr%2F&usg=AOvVaw2y0zDv1IhgZyRt2r2tcEYU"),
                        array(24,"Утвердження більшовицького тоталітарного режиму в Україні","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwi3n4mA_d_iAhUnpYsKHWD7BugQFjAAegQIAxAB&url=https%3A%2F%2Fpidruchniki.com%2F1582082744776%2Fistoriya%2Futverdzhennya_stalinskogo_totalitarnogo_rezhimu_ukrayini_masovi_represiyi&usg=AOvVaw3BsEMhyF5MRbJ3hjaELqCD"),
                        array(25,"Західноукраїнські землі в міжвоєнний період","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwjL-J6K_d_iAhXLlYsKHS98BYAQFjABegQIAhAB&url=http%3A%2F%2Fstudies.in.ua%2Fru%2Fistoriya-ukrainy-lekcii%2F1115-tema-v-ukrayinsk-zeml-v-mzhvoyenniy-perod-1921-1939-rr-2.html&usg=AOvVaw1FUjN3jmGsyq2KI05TUq8i"),
                        array(26,"Україна в роки Другої світової війни","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwjkneqT_d_iAhWQpYsKHUmNAvoQFjABegQIBRAB&url=http%3A%2F%2Fhistory.org.ua%2F%3Ftermin%3DDruga_svitova_viyna_1939_1945&usg=AOvVaw3GRXtcpNkn8AeOM-hL7k1z"),
                        array(27,"Україна в перші повоєнні роки","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwir2_ib_d_iAhXqlIsKHYtkBj0QFjAAegQIAhAB&url=https%3A%2F%2Fpidruchniki.com%2F1754090656910%2Fistoriya%2Fukrayina_povoyenni_roki_1945-1955&usg=AOvVaw0jZgGlIMYQXJCLLLxGA6dQ"),
                        array(28,"Україна в умовах десталінізації","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjBsvqi_d_iAhVoxIsKHdy4CGgQFjAAegQIAhAB&url=https%3A%2F%2Fvseosvita.ua%2Flibrary%2Fukraina-v-umovah-destalinizacii-1953-1964-41662.html&usg=AOvVaw3NX6hCciHtgabaOT3VRIp7"),
                        array(29,"Україна в період загострення кризи радянської системи","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwi80aSp_d_iAhWts4sKHXw0BNsQFjAAegQIAhAB&url=https%3A%2F%2Fpidruchniki.com%2F76113%2Fistoriya%2Fukrayina_period_zagostrennya_krizi_radyanskoyi_sistemi_seredina_60-h_pochatok_80-h_rokiv&usg=AOvVaw3AisXvBRUnJBreBJW9D6TR"),
                        array(30,"Відновлення незалежності України","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjIr5e7_d_iAhUQtYsKHVC9CYwQFjAAegQIAxAB&url=https%3A%2F%2Fuk.wikipedia.org%2Fwiki%2F%25D0%259F%25D1%2580%25D0%25BE%25D0%25B3%25D0%25BE%25D0%25BB%25D0%25BE%25D1%2588%25D0%25B5%25D0%25BD%25D0%25BD%25D1%258F_%25D0%25BD%25D0%25B5%25D0%25B7%25D0%25B0%25D0%25BB%25D0%25B5%25D0%25B6%25D0%25BD%25D0%25BE%25D1%2581%25D1%2582%25D1%2596_%25D0%25A3%25D0%25BA%25D1%2580%25D0%25B0%25D1%2597%25D0%25BD%25D0%25B8_1991&usg=AOvVaw04KOhFieN5NkOGq4Tqfzyj"),
                        array(31,"Становлення України як незалежної держави","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=2ahUKEwjB_cbL_d_iAhVosIsKHVJhCfsQFjACegQIBBAB&url=http%3A%2F%2Fwww.zprozrda.gov.ua%2Findex.php%2F3820-stanovlennya-nezalezhnosti-ukrajini&usg=AOvVaw0EVluSLZbJl1HmfeiEcSJT"),
                        array(32,"Творення нової України","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=2ahUKEwjquKrU_d_iAhVKlIsKHR8nBigQFjACegQIAxAB&url=https%3A%2F%2Fvseosvita.ua%2Flibrary%2Ftereni-tvorenna-novoi-ukrainiderzava-ukraina-ta-ii-susidi-36788.html&usg=AOvVaw0xSpmYN95IUisUKmurXyb7"));
                    for($row=0;$row<32;$row++){
                        echo "<tr>";
                        for ($col = 0; $col < 2; $col++) {
                            echo "<td>".$ist[$row][$col]."</td>";
                        }
                        echo "<td><a href=".$ist[$row][2].">Детальніше...</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <a name="mat"></a>
        <div class="card mt-5">
            <h5 class="card-header">Математика</h5>
            <table class="table table-striped" id="tab6">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $ist=array(
                    array(1,"Числа і вирази","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwiQuO7lkeDiAhWQpYsKHUmNAvoQFjAAegQIBhAB&url=http%3A%2F%2Fznaniya.znonline.org%2Fcourse%2Fview.php%3Fid%3D22%26section%3D1%26lang%3Dru&usg=AOvVaw11qtKUGYhcq7kxqWWOR5qN"),
                    array(2,"Рівняння, нерівності та їхні системи","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjPnoDukeDiAhUMp4sKHXI_AeUQFjAAegQIABAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Ftool%2Fprint%2Findex.php%3Fid%3D3052&usg=AOvVaw3CgCc1zcFC82rb1jzU59AB"),
                    array(3,"Функції","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=14&cad=rja&uact=8&ved=2ahUKEwiDwrz0keDiAhUNuIsKHdj0DoQQFjANegQICRAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Ftool%2Fprint%2Findex.php%3Fid%3D3054&usg=AOvVaw2C_VQtE1czh8rQgJZ7K1sq"),
                    array(4,"Елементи комбінаторики,початки теорії ймовірностей та елементи математичної статистики","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwiPi9SAkuDiAhUniIsKHXQLBFcQFjAAegQIABAB&url=http%3A%2F%2Foipopp.ed-sp.net%2F%3Fq%3Dtaxonomy%2Fterm%2F658&usg=AOvVaw2DL41fT0lFcrD60mkexOrI"),
                    array(5,"Планіметрія","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=6&cad=rja&uact=8&ved=2ahUKEwiSnKivkuDiAhWJ_CoKHYmTBl4QFjAFegQICRAB&url=https%3A%2F%2Fstudfiles.net%2Fpreview%2F2303107%2F&usg=AOvVaw0PhhJ0KQlod3oNTIw-OAH0"),
                    array(6,"Стереометрія","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=6&cad=rja&uact=8&ved=2ahUKEwj13Zu3kuDiAhWr-ioKHXK5B0UQFjAFegQIBxAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Fview.php%3Fid%3D3207&usg=AOvVaw3dv1_1jKLxVH3AJXy8Q-FJ")
                );
                for($row=0;$row<6;$row++){
                    echo "<tr>";
                    for ($col = 0; $col < 2; $col++) {
                        echo "<td>".$ist[$row][$col]."</td>";
                    }
                    echo "<td><a href=".$ist[$row][2].">Детальніше...</a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>

        <a name="nim"></a>
        <div class="card mt-5">
            <h5 class="card-header">Німецька мова</h5>
            <table class="table table-striped" id="tab7">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Розуміння мови на слух(аудіювання), читання і письмо.</td>
                    <td><a href="http://testportal.gov.ua//wp-content/uploads/2016/12/Programa_2020_inozemni.pdf">Детальніше...</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <a name="ukr"></a>
        <div class="card mt-5">
            <h5 class="card-header">Українська мова та література</h5>
            <table class="table table-striped" id="tab8">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $ist=array(
                    array(1,"Фонетика. Графіка. Орфоепія. Орфографія","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwi5zqnJkuDiAhUvl4sKHR22DX0QFjAAegQIAhAB&url=https%3A%2F%2Fschool.home-task.com%2Ffonetika-orfoepiya-grafika-orfografiya%2F&usg=AOvVaw220Mv6yhHjJpPAMMaKecYV"),
                    array(2,"Лексикологія. Фразеологія","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwi8q-_QkuDiAhWNo4sKHQdNCyAQFjAAegQIAhAB&url=https%3A%2F%2Fpidruchniki.com%2F1957041140538%2Fdokumentoznavstvo%2Fleksikologiya_frazeologiya_leksikografiya&usg=AOvVaw00R3maxGTvBDPSH1_-JH6A"),
                    array(3,"Будова слова. Словотвір","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjIkrrWkuDiAhXuxIsKHVVCCtMQFjAAegQIBBAB&url=http%3A%2F%2Fschoollit.com.ua%2Fbudova-slova-slovotvir%2F&usg=AOvVaw0Ux8-1QHgZOc9EOPal3W3C"),
                    array(4,"Морфологія","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=6&cad=rja&uact=8&ved=2ahUKEwjj75rckuDiAhVnkIsKHUiDCT8QFjAFegQIBBAB&url=https%3A%2F%2Fpidruchniki.com%2F68671%2Fdokumentoznavstvo%2Fmorfologiya_rozdil_gramatiki&usg=AOvVaw2o4EOG2t8Dh3LHoVedUbdo"),
                    array(5,"Синтаксис","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwjKjfPnkuDiAhUhlIsKHQsmB_kQFjABegQIAhAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Fview.php%3Fid%3D1381&usg=AOvVaw3RN1keVJ74x4N62OtCYjYI"),
                    array(6,"Стилістика","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwihoPDxkuDiAhVhkIsKHeRsD0IQFjAAegQIAxAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Fview.php%3Fid%3D1390&usg=AOvVaw2XFom3c9potqovtp6eHaqo"),
                    array(7,"Розвиток мовлення","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwiUiej_kuDiAhXusYsKHaCkCRgQFjAAegQIBBAB&url=http%3A%2F%2Fschoollit.com.ua%2Fstilistika-rozvitok-movlennya%2F&usg=AOvVaw1wR_9o28FI0qaw0MRye6My"),
                    array(8,"Усна народна творчість","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=8&cad=rja&uact=8&ved=2ahUKEwj865GRk-DiAhWEp4sKHVEtDwMQFjAHegQIARAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fcourse%2Fview.php%3Fid%3D14&usg=AOvVaw3eY4s2Cw6UfVuoUpnapWmp"),
                    array(9,"Давня українська література","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=12&cad=rja&uact=8&ved=2ahUKEwiEhYSek-DiAhVGxosKHQjAB2QQFjALegQIABAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fmod%2Fbook%2Fview.php%3Fid%3D1585&usg=AOvVaw0Vgnv5f5KmdaJplTVVMRc4"),
                    array(10,"Література кінця XVIII - початку XX ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=5&cad=rja&uact=8&ved=2ahUKEwiPxr-nk-DiAhXyl4sKHWhqCgwQFjAEegQIAhAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fcourse%2Fview.php%3Fid%3D14&usg=AOvVaw3eY4s2Cw6UfVuoUpnapWmp"),
                    array(11,"Література XX ст.","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwjz_Nezk-DiAhVhtIsKHScwB4gQFjABegQIBBAB&url=https%3A%2F%2Fukrlit.net%2Fdovidnik_zno%2F33.html&usg=AOvVaw0a4GZwCqfWEzDZ_8Kvz1Rb"),
                    array(12,"Твори українських письменників-емігрантів","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwjix_q9k-DiAhVFlIsKHaV1A-kQFjABegQIAhAB&url=http%3A%2F%2Ftsdazu.gov.ua%2Findex.php%2Fua%2Fonline%2F47-all%2F524-2015-01-20-09-49-30.html&usg=AOvVaw17Hs8pw6-9dgZBpgKL1VgB"),
                    array(13,"Сучасний літературний процес (кінець ХХ - початок ХХІ ст.)","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjq7KPGk-DiAhXQwosKHSDqDv8QFjAAegQIBBAB&url=http%3A%2F%2Fukrclassic.com.ua%2Fkatalog%2Fteoriya-literaturi%2F2666-ukrajinska-literatura-kintsya-xx-pochatku-xxi-st-na-shlyakhu-do-novogo-vidrodzhennya&usg=AOvVaw22HJDKpY4Jo2dH0kDKunss")
                );
                for($row=0;$row<13;$row++){
                    echo "<tr>";
                    for ($col = 0; $col < 2; $col++) {
                        echo "<td>".$ist[$row][$col]."</td>";
                    }
                    echo "<td><a href=".$ist[$row][2].">Детальніше...</a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>

        <a name="phis"></a>
        <div class="card mt-5">
            <h5 class="card-header">Фізика</h5>
            <table class="table table-striped" id="tab9">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $ist=array(
                    array(1,"Механіка","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=2ahUKEwjKornRk-DiAhVnsosKHQ-BDiUQFjACegQIAxAB&url=https%3A%2F%2Fwww.zno200.com%2Ffizyka%2F24-mekh%2F4-mekhanika&usg=AOvVaw2gYO_s7BzkZXHMECafhSqv"),
                    array(2,"Молекулярна фізика і термодинаміка","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwi--9HYk-DiAhWL-yoKHXnjBCIQFjAAegQIBRAB&url=http%3A%2F%2Fphysics.kpi.ua%2Fmoodlephysics%2Fmod%2Fbook%2Fview.php%3Fid%3D519%26chapterid%3D24&usg=AOvVaw1c8wWw6TAF1XzyPUOhHcuW"),
                    array(3,"Електродинаміка","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwjU59zlk-DiAhVslYsKHV2GA88QFjABegQIBRAB&url=https%3A%2F%2Fsubject.com.ua%2Fphysics%2Fzno%2F99.html&usg=AOvVaw3Mcv0_j46_Kl3lGixgl87x"),
                    array(4,"Коливання і хвилі. Оптика","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwi6h_Hwk-DiAhUxi8MKHfioA-4QFjABegQIAhAB&url=https%3A%2F%2Fallbest.ru%2Fo-3c0a65635b2ac78b5d53b89421306d26.html&usg=AOvVaw2aZMwxGPZmwa9SMHV_vndO"),
                    array(5,"Квантова фізика. Елементи теорії відносності","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwiw7Lz4k-DiAhUBxosKHY9pCE4QFjAAegQIBRAB&url=https%3A%2F%2Fsubject.com.ua%2Fphysics%2Fzno%2F188.html&usg=AOvVaw2pu2iKWLfkKU9rCcRGUsqr"));
                for($row=0;$row<5;$row++){
                    echo "<tr>";
                    for ($col = 0; $col < 2; $col++) {
                        echo "<td>".$ist[$row][$col]."</td>";
                    }
                    echo "<td><a href=".$ist[$row][2].">Детальніше...</a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>

        <a name="fr"></a>
        <div class="card mt-5">
            <h5 class="card-header">Французька мова</h5>
            <table class="table table-striped" id="tab10">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Розуміння мови на слух(аудіювання), читання і письмо.</td>
                    <td><a href="http://testportal.gov.ua//wp-content/uploads/2016/12/Programa_2020_inozemni.pdf">Детальніше...</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <a name="chim"></a>
        <div class="card mt-5">
            <h5 class="card-header">Хімія</h5>
            <table class="table table-striped" id="tab11">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Тема</th>
                    <th>Корисне посилання</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $ist=array(
                    array(1,"Загальна хімія ","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwijpLKKlODiAhWwAxAIHf65DAAQFjAAegQIARAB&url=http%3A%2F%2Fzno.academia.in.ua%2Fcourse%2Fview.php%3Fid%3D11&usg=AOvVaw2MOCo42yjrT7tiPlJHbHE2"),
                    array(2,"Неорганічна хімія ","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjA39GQlODiAhVjsYsKHfxuDv4QFjAAegQIBBAB&url=https%3A%2F%2Fznohimbio.jimdo.com%2F%25D0%25BF%25D1%2596%25D0%25B4%25D0%25B3%25D0%25BE%25D1%2582%25D0%25BE%25D0%25B2%25D0%25BA%25D0%25B0-%25D0%25B4%25D0%25BE-%25D0%25B7%25D0%25BD%25D0%25BE-%25D0%25B7-%25D1%2585%25D1%2596%25D0%25BC%25D1%2596%25D1%2597%2F&usg=AOvVaw0FUy4xFrEMTeEl0HS4fZwH"),
                    array(3,"Органічна хімія","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=4&cad=rja&uact=8&ved=2ahUKEwjQjYCelODiAhVDw4sKHeMzC_wQFjADegQIARAB&url=http%3A%2F%2Fznochem407.blogspot.com%2Fp%2F3.html&usg=AOvVaw2S-PZg9OojU60mn7tEJ8mR"),
                    array(4,"Обчислення в хімії ","https://www.google.com.ua/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwiZpqimlODiAhVpsYsKHctEANsQFjAAegQIAxAB&url=https%3A%2F%2Fsubject.com.ua%2Fchemistry%2Fzno1%2F9.html&usg=AOvVaw0ai5OrIHlMEVHz0w5B76_v"));
                for($row=0;$row<4;$row++){
                    echo "<tr>";
                    for ($col = 0; $col < 2; $col++) {
                        echo "<td>".$ist[$row][$col]."</td>";
                    }
                    echo "<td><a href=".$ist[$row][2].">Детальніше...</a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<footer>
    <?php require "footer.php";?>
</footer>
</body>

</html>