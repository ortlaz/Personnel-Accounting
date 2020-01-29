<!DOCTYPE html>
<?php include_once ('../php/session.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница администратора</title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
<form class="" method="GET">
    <header>
        <div class="container">
            <nav>
                <ul class="menu">
                    <li class="up">
                        <a class="logo" href = "introduction.php">Моя работа.ру</a>
                    </li>
                    <li class="up">
                        <a class="up" href = "lks.php">Личный кабинет</a>
                    </li>
                    <li class="up">
                        <a class="up" href = "#">Администратрирование</a>
                    </li>
                    <li class="up">
                        <input class="up" name="exit" type="submit" value="Выйти">
                    </li>

                </ul>
            </nav>
        </div>
    </header>

    <div class="buttons">
        <a class="button" href="admin_change.php">Изменить</a>
        <input class="button"  name="but0" type="submit" value="Показать">
        <input class="button"  name="fired_but" type="submit" value="Показать уволенных">
        <p> Сортировать по:</p>
        <input class="button"  name="but1" type="submit" value="имени">
        <input class="button"  name="but2" type="submit" value="отделу">
        <input class="button"  name="but3" type="submit" value="статусу">
        <p> Отфильтровать уволенных сотрудников:</p>
        <input class="button"  name="del_but" type="submit" value="фильтр">


    </div>

    <div class="BD">
        <table>
            <tr>
                <th class="headers">ID</th>
                <th class="headers">Статус</th>
                <th class="headers">Имя</th>
                <th class="headers">Фамилия</th>
                <th class="headers">Отчество</th>
                <th class="headers">Дата рождения</th>
                <th class="headers">Номер паспорта</th>
                <th class="headers">ИНН</th>
                <th class="headers">СНИЛС</th>
                <th class="headers">Email</th>
                <th class="headers">Пароль</th>
                <th class="headers">Номер диплома</th>
                <th class="headers">Отдел</th>
                <th class="headers">Должность</th>
                <th class="headers">Предыдущее место работы</th>
                <th class="headers">Коэффициент трудового участия</th>
                <th class="headers">Заработная плата</th>
                <th class="headers">Сумма штрафов</th>
                <th class="headers">Администратор
                    (1-да,0-нет)</th>
            </tr>
            <?php include_once("../php/bd_output.php");
                include_once ("../php/bd_sort.php");
                include_once ("../php/bd_del.php");
            ?>

        </table>
    </div>

</form>
</body>
</html>