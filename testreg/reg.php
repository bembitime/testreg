<?php
require_once 'connection.php' ;

// Открываем подключение к базе данных
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

// Заносим данные введенные пользователем в переменные
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password=$_POST["password"];}

$result=$link->query ("INSERT INTO  user_reg (email,password) VALUES ('$email','$password')");

if ($result == true) {
    echo "All right" ;} else {
    echo "All bad";
} 


?>

