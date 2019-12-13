<?php
$host = "localhost";
$user = "root"; // Логин БД
$password = ""; // Пароль БД
$base = 'stud_db'; // Имя БД
$table = "stud1"; // Имя Таблицы БД


$connection = mysqli_connect($host, $user, $password, $base);
if ($connection == false){
  echo 'Не удалось подключиться к базе данных! <br>';
  echo mysqli_connect_error();
  exit();
}


?>