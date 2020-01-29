<!DOCTYPE html>
<?php include_once ('../php/session.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактирование</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_change.css">
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
                        <a class="up" href = "admin.php">Администратрирование</a>
                    </li>
                    <li class="up">
                        <input class="up" name="exit" type="submit" value="Выйти">
                    </li>

                </ul>
            </nav>
        </div>
    </header>

    <div class="form">

        <div class="input-group">
        <label>ID:</label>
        <input type="text" name="id" class="form-control" placeholder="Изменить"/>
        </div>

        <div class="input-group">
            <label>Изменить:</label>
            <select name="value">
                <option value="status">Статус</option>
                <option value="name1">Имя</option>
                <option value="surname">Фамилия</option>
                <option value="lastname">Отчество</option>
                <option value="inn">ИНН</option>
                <option value="snils">СНИЛС</option>
                <option value="email">Email</option>
                <option value="diplom">Номер диплома</option>
                <option value="otdel">Отдел</option>
                <option value="post">Должность</option>
                <option value="lastpost">Предыдущее место работы</option>
                <option value="coef">Коэффициент</option>
                <option value="pay">Заработная плата</option>
                <option value="passport">Номер пасспорта</option>
                <option value="fine">Штрафы</option>
                <option value="admin">Сделать админом(0-нет,1-да)</option>
            </select>
        </div>

        <div class="input-group">
            <input type="text" name="new_val" class="form-control1" placeholder="Введите значение"/>
        </div>

        <input class="button" id="button" name="but" type="submit" value="Сохранить">
        <p><b> <?php include_once ("../php/bd_change.php"); ?></b> </p>
        <div class="input-group">
            <label>ID:</label>
            <input type="text" name="id2" class="form-control" placeholder="Восстановить"/>
        </div>
        <input class="button" id="button" name="restore" type="submit" value="Восстановить сотрудника">
        <p><b> <?php include_once ("../php/bd_del.php"); ?></b> </p>
    </div>
</form>
</body>
</html>
