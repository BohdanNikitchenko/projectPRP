<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AbitPro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">

</head>
<body>
<form action="index.php" method="post" class="form-signin">
    <h1 class="h3 mb-3  font-weight-normal">Regestration:</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

    <label for="inputPassword" class="sr-only">Пароль</label>
    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Пароль" required="">

    <label for="inputSurname" class="sr-only">Фамілія</label>
    <input type="text" name="surname" id="inputsurname" class="form-control" placeholder="Фамілія" required="">

    <label for="inputName" class="sr-only">Ім'я</label>
    <input type="text" name="name" id="inputName" class="form-control" placeholder="Ім'я" required="">

    <label for="inputThirdName" class="sr-only">Отчество</label>
    <input type="text" name="ThirdName" id="inputThirdName" class="form-control" placeholder="По-батькові" required="">

    <label for="inputPhone" class="sr-only">Телефон</label>
    <input type="text" name="Phone" id="inputPhone" class="form-control" placeholder="Телефон" required="">

        <button class="btn btn-lg btn-primary btn-block mt-5" id="sendBtn" name="send" type="button">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2019</p>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/do.js"></script>
</body>
</html>