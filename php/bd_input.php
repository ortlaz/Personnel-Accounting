<?php

include_once ("bd_connection.php");
include_once ("check_point.php");

// заненсение информации в базу данных из формы

if(isset($_GET['1name'])) {
    $bday = trim($_GET['bday']);
    $passport = ($_GET['passport_num']);
    $lastname = ($_GET['lastname']);
    $inn = ($_GET['inn']);
    $snils = ($_GET['snils']);
    $diplom = ($_GET['diplom']);
    $otdel = trim($_GET['otdel']);
    $surname = trim($_GET['surname']);
    $post = ($_GET['post']);
    $lastpost = ($_GET['lastpost']);
    $email = trim($_GET['email']);
    $name = trim($_GET['1name']);
    $password = $_GET['password'];
    $password2 = $_GET['check_pas'];

    // проверка ввода
    if (numbers($passport)&&numbers($inn)&&numbers($snils)&&numbers($diplom)) {

        // проверка совпадения пароля
        if ($password == $password2) {

            // проверка e-mail
            if (mail1($email)) {

                // создание новой записи в БД
                $query = $mysqli->query("INSERT INTO `users`(name1,surname,lastname,bday,inn,snils,email,password,diplom,otdel,post,lastpost,passport)
                    VALUES ('" . $name . "','" . $surname . "','" . $lastname . "','" . $bday . "','" . $inn . "','" . $snils . "','" . $email . "','" . $password . "','" . $diplom . "','" . $otdel . "','" . $post . "','" . $lastpost . "','" . $passport . "')");

                if ($query) {
                    $message = "Запись успешно добавлена! Можете авторизоваться.";
                } else {
                    $message = "Запись не добавлена.";
                }
            } else {
                $message = "Ошибка ввода e-mail";
            }
        } else {
            $message = "Пароли не совпадают!";
        }
    } else {
        $message = "Ошибка заполнения формы!";
    }
}

// вывод сообщения
if (!empty($message)) {
    echo "<p class=\"error\">" . $message . "</p>";
}
?>