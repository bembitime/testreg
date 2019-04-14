<?php
require_once 'connection.php' ;

// Открываем подключение к базе данных
$link = mysql_connect($host, $user, $password, $database)
or die("Ошибка " . mysql_error($link));

// Заносим данные введенные пользователем в переменные
if (isset($_POST['submit'])) {
  //  $email = $_POST["email"];
    //$password=$_POST["password"];}


$query = mysqli_query("SELECT * FROM user_reg WHERE email='".($_POST['email'])."' ");
    $data = mysqli_fetch_assoc($query);

}    
if($data['password'] == $password) {
	echo "NU NAKANECTA";
} else {

	echo "DA EPTAAAAA";
}




?>

