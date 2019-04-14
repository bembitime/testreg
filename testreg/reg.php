<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>


	<form action="aut.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
<button type="submit" class="btn btn-primary btn-aut">Авторизация</button>


</form>
</body>
</html>

<?php
require_once 'connection.php' ;

// Открываем подключение к базе данных
$query = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($query));

// Заносим данные введенные пользователем в переменные
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password=$_POST["password"];}
    $id=0;
$result=$query->query ("INSERT INTO  user_reg (id,email,password) VALUES ('$id','$email','$password'");

if ($result == true) {
    echo "All right" ;
    $id++;
} else {
    echo "All bad";
} 




?>

