<?php
include "func.php";

if (isset($_POST['suname']) && isset($_POST['name'])){  //условие для добавления
    // Переменные с формы
    $suname = $_POST['suname'];
    $name = $_POST['name'];
    $depo = $_POST['depo'];

    // Параметры для подключения
    $result = $connection->query("INSERT INTO " .$db_table." (suname, name, deposit) VALUES ('$suname','$name', '$depo')");

    if ($result == true){
      header ('Location: http://schooll.local/');
      exit();
    }else{
      echo "Информация не занесена в базу данных";
    }
  }
  if(array_key_exists('delt',$_POST)){//условие для удаления
    // Переменные с формы

    $id = $_GET['id'];
    $del = $connection->query("DELETE FROM `dano` WHERE `id`= $id");


    if ($del == true) {
        header('Location: http://schooll.local/');
        exit();
    } else {
        echo "Ошибка";
    }
}


if (array_key_exists('renam',$_POST)) {//условие редактирования
// Переменные с формы
  $newname = $_POST['rename'];
  $newsuname = $_POST['rename1'];
  $newdepo = $_POST['rename2'];
  $id = $_GET['id'];
  $ren1 = $connection->query("UPDATE `dano` SET `name` = '$newname', `deposit`= '$newdepo', `suname` =  '$newsuname' WHERE `id` = $id");
  if ($ren1 == true) {
      header('Location: http://schooll.local/');
      exit();
  } else {
      echo "Ошибка";
  }
}






?>