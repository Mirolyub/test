
<?php   include 'header.php'; // Подключение шапки сайта ?>
<div class="container">
  <div class="row">
    <table class="table">
<thead class="thead-light">
  <tr>
    <th><input type="checkbox" aria-label="Checkbox for following text input"></th>
    <th>Фамилия</th>
    <th>Имя</th>
    <th>Депозит</th>
    <th class="kray">Руб</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
    <td>ФАМ</td>
    <td>АНтон</td>
    <td>500</td>
    <td class="kray">Руб</td>
  </tr>
  <tr>
    <th scope="row"><input type="checkbox" aria-label="Checkbox for following text input"></th>
    <td>Антонов</td>
    <td>Петр</td>
    <td>600</td>
    <td class="kray">Руб</td>
  </tr>
</tbody>
</table>
</div>
</div>
<div class="container">
  <div class="row">
<div class="navbar-brand">Изменить депозит учеников:</div>
        <div class="form-inline">
            <input class="form-control col-5 f" type="text" placeholder="Сумма изменения" id="sum">
            <button class="btn btn-outline-success col-3 d" type="submit" id="increase">Увеличить</button>
            <button class="btn btn-outline-success col-3 d" type="submit" id="decrease">Уменьшить</button>
        </div>

  </div>
</div>