<?php  ob_start();
 include 'header.php'; // Подключение шапки сайта ?>

<div id ="container">
 <?php
$id = $_GET['id'];  // присваиваение переменной id для вывода
$sql = mysqli_query($connection, "SELECT*FROM `dano` WHERE id = $id" ); // соединение с БД и условие для вывода списка
while ( ($baza1 = mysqli_fetch_assoc($sql)) ) {
    echo '<a href="/home-id.php?id='.$baza1['id'].'">'. '<div class="row osn">' .  '<div class="col-3">' . $baza1['suname'] . '</div>'  . '<div class="col-3">' . $baza1['name'] . '</div>'  . '<div class="col-3 deposit">' . $baza1['deposit'] . '</div>'  . '<div class="col-3">' . $baza1['rub'] . '</div>'.  '</div>'  . '</a>';
  }  // вывод списка который соответсвует условию
 // $newname = $baza1['name'];
 ?>
    <form method="POST" action="">
        <input class="btn btn-success" id="delt" name="delt" type="submit" value="Удалить запись"/>
    </form>
    <div class="a3">Изменить данные ученика: </div>
    <form method="POST" action="">
          <input class="col-4" name="rename" type="text" placeholder="Имя"/>
          <input class="col-4" name="rename1" type="text" placeholder="Фамилия"/>
          <input class="col-4" name="rename2" type="text" placeholder="Депозит"/>
         <input class="btn btn-success" id="renam" name="renam" type="submit" value="Изменить"/>
    </form>
</div>

<?php
mysqli_close($connection); // отключение
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> <!-- подключение jquery библиотеки -->
    <script src="js/main.js"></script> <!-- Подключение моего скрипта-->

</body>
</html>