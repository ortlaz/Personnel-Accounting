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
                        <a class="up" href = "booker.php">Администрирование</a>
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
                <option value="coef">Коэффициент</option>
                <option value="pay">Заработная плата</option>
                <option value="fine">Штрафы</option>

            </select>
        </div>

        <div class="input-group">
            <input type="text" name="new_val" class="form-control1" placeholder="Введите значение"/>
        </div>


        <input class="button" id="button" name="but" type="submit" value="Сохранить">
        <p><b> <?php include_once ("../php/bd_change.php"); ?></b> </p>
    </div>
</form>
</body>
</html>
