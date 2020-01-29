<?php
include_once ("bd_connection.php");
include_once ("session.php");

// вывод информации об авторизованном пользователе из базы данных

if (isset($_SESSION['password'])) {
    while ($rows = $res_all->fetch_assoc()) {
        if ($_SESSION['password'] == $rows['password']) {
            $row = $rows;
        }
    }
}

?>