<div class="main">
    <h2 style="text-align: center">Личный кабинет</h2>
<hr>
    <h3>Добавленные резюме</h3>
<table>
    <?php
    foreach($this->userList as $key => $value) {
        echo '<tr>';
        echo '<td>'.$value['id'].'</td>';
        echo '<td>'.$value['date'].'</td>';
        echo '<td>'.$value['name'].'</td>';
        echo '<td>'.$value['surname'].'</td>';
        echo '<td><a href="' . URL .'dashboard/view/'. $value['id'] .'">Просмотр</a>
                  <a href="' . URL .'dashboard/delete/'. $value['id'] .'">Удалить</a>
              </td>';
    }
    ?>
</table>
</div>
