<?php
include_once ("bd_connection.php");
include_once ('session.php');
include_once ('bd_output.php');

// проверка на администратора

    if ($row['admin'] == '1') { // если администратор
          echo '<a href = "../html/admin.php">Администрирование</a>';
    } else if(($row['otdel']=="Бухгалтерия") && ($row['status']!='в ожидании')){
        echo '<a href = "../html/booker.php">Администрирование</a>'; // если бухгалтер
    }else echo '<a href = "../html/admin_error.html">Администрирование</a>'; // если обычный пользователь

?>