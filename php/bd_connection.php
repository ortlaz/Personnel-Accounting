<?php

// подключение к базе данных

$mysqli = new mysqli('localhost','root','',"workers");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к базе данных: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// изменение набора символов на utf8
if (!$mysqli->set_charset("utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", $mysqli->error);
    exit();

}
?>
