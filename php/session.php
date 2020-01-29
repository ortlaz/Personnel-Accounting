<?php
include_once ('../php/bd_connection.php');

// начало сессии
session_start();

// кнопка "Выход"
if(isset($_GET['exit'])){
    header('Location: //localhost:63342/try1/html/insert.php');
    session_destroy();
}

$res_all = $mysqli->query("SELECT * FROM users");

// авторизация
if(isset($_GET['login_button'])) {
    while ($sess = $res_all->fetch_assoc()) {
            foreach ($sess as $key => $value) {

                // проверка введённых данныхч
                if ($_GET['email'] == $sess['email'] && $_GET['pass'] == $sess['password']) {
                    $_SESSION['password']=$sess['password'];
                    header("Location:http://localhost:63342/try1/html/introduction.php");
                    break;
                } elseif ($_GET['pass'] != $sess['password']) {
                    $message = 'Ошибка! Данные введены неверно';
                } else {
                    $message = 'Ошибка! Данные введены неверно';
                }
            }
    }

}
?>