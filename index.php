<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			background-image: url(images.png) ;
		}
		.center{
			width: 340px;
		    padding: 10px;
 		    margin-top:200px;
 		    margin-left: 500px;
		    background: #dcdfe3;
		    border: 1px solid #102f56;
		    border-radius: 5px;
		}
	</style>
</head>
<body>
<div class="center">
<?php  

/*Получение данных из формы*/
if(isset($_POST['first_name']) && isset($_POST['last_name']) 
	&& isset($_POST['email']) && isset($_POST['age']) 
	&& isset($_POST['eduform'])){

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$eduform = $_POST['eduform'];

}
else{
	echo "Неверные данные<br><br>";
	echo "<a href='main.html'>Вернуться на главную</a>";
	exit;
}

/*Даанные для подключения к БД*/
$db_host = 'localhost';
$db_login = 'root';
$db_pass = '';
$db_name = 'courses';

/*Подключение к БД*/
$connect = mysqli_connect($db_host, $db_login, $db_pass, $db_name)
	or die("No connection" . mysqli_eror());

/*Установка кодировки*/
mysqli_set_charset($connect, "utf8")
	or die("No utf8");

/*Добавление данных в БД*/
$query = "INSERT INTO 
	registration(first_name, last_name, email, age, course)
	VALUES
	('$first_name', '$last_name', '$email', '$age', '$eduform')";
$result = mysqli_query($connect, $query);

/*Проверка результата*/
if(!$result){
	echo "No INSERT";
}
else{
	echo "Ваше имя: $first_name<br>";
	echo "Ваша фамилия: $last_name<br>";
	echo "Ваш e-mail: $email<br>";
	echo "Ваш возраст: $age<br>";
	echo "Выбранный курс: $eduform<br><br>";
	echo "Данные добавлены!"; 
}

?>
</div>
</body>
</html>