<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<!-- Форма регистрации -->
<form action="reg.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary btn-reg">Регистрация</button>
</form>
</body>




</html>





<?php


echo "ПРОВЕРКА НА СУЩЕСТВОВАНИЕ... ПУСТЫЕ ПОЛЯ не значения... СЕССИИ... ЛОГАУТ... НОРМАЛЬНЫЕ СТРАНИЦЫ(в нужные места рег и автор)"

?>