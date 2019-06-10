<?php
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/rate.css">
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
        <div class="modal-body mt-5 row">
            <div class="col-md-6">
                <a href="#zag">Загальний рейтинг ЗВО України</a>
                <a href="#spec">Рейтинг ЗВО України за вказаною спеціальністю</a>
                <a href="#bal">Рейтинг ЗВО України за середнім прохідним балом</a>
            </div>
            <div class="col-md-6">
                <a href="#b">Рейтинг ЗВО України за найвищим мінімальним балом на бюджет</a>
                <a href="#k">Рейтинг ЗВО України за найвищим мінімальним балом на контракт</a>
            </div>
        </div>
        <a name="zag"></a>
        <div class="card mt-5">
            <h5 class="card-header">Загальний рейтинг ЗВО України</h5>
            <table class="table table-striped" id="tab">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Назва ЗВО</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Харківський національний університет радіоелектроніки</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Київський національний університет "Києво-Могилянська Академія"</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="input-group mb-5 mt-5">
            <input class="select" type="text" placeholder="Оберіть спеціальність зі списку" name="city" list="inputGroupSelect01">
            <datalist class="select" id="inputGroupSelect01">
                <!--  ЦИКЛЫ  -->
                <option value="dtgj"></option>
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="33"></option>
            </datalist>
            <div class="input-group-append">
                <input type="button" class="input-group-text" for="inputGroupSelect02" value="Обрати"/>
            </div>
        </div>
        <a name="spec"></a>
        <div class="card mt-5">
            <h5 class="card-header">Рейтинг ЗВО України за вказаною спеціальністю</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Назва ЗВО</th>
                    <th>Мінімальний бал для держзамовлення</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Харківський національний університет радіоелектроніки</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Київський національний університет "Києво-Могилянська Академія"</td>
                    <td>180</td>
                </tr>
                </tbody>
            </table>
        </div>

        <a name="bal"></a>
        <div class="card mt-5">
            <h5 class="card-header">Рейтинг ЗВО України за середнім прохідним балом</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Назва ЗВО</th>
                    <th>Середній прохідний бал</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Харківський національний університет радіоелектроніки</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Київський національний університет "Києво-Могилянська Академія"</td>
                    <td>180</td>
                </tr>
                </tbody>
                </tbody>
            </table>
        </div>

        <a name="b"></a>
        <div class="card mt-5">
            <h5 class="card-header">Рейтинг ЗВО України за найвищим мінімальним балом на бюджет</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Назва ЗВО</th>
                    <th>Мінімальний бал на бюджет</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Харківський національний університет радіоелектроніки</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Київський національний університет "Києво-Могилянська Академія"</td>
                    <td>180</td>
                </tr>
                </tbody>
            </table>
        </div>

        <a name="k"></a>
        <div class="card mt-5">
            <h5 class="card-header">Рейтинг ЗВО України за найвищим мінімальним балом на контракт</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Назва ЗВО</th>
                    <th>Мінімальний бал на контракт</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Харківський національний університет радіоелектроніки</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Київський національний університет "Києво-Могилянська Академія"</td>
                    <td>180</td>
                </tr>
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