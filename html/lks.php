<!DOCTYPE html>
<?php include_once ('../php/session.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" type="text/css" href="../css/lks.css">
</head>
<body>
<form class="" method="GET">
    <header>
    <div class="container">

           <nav>
                <ul class="menu">
                    <li>
                        <a class="logo" href = "introduction.php">Моя работа.ру</a>
                    </li>
                    <li>
                        <a href = "#">Личный кабинет</a>
                    </li>
                    <li>
                        <?php include_once("../php/admin_error.php"); ?>
                       <!-- <a href = "admin.php">Администратор</a> -->
                    </li>
                    <li>
                        <input class="up" name="exit" type="submit" value="Выйти">
                    </li>
                </ul>
            </nav>
    </div>
    </header>
    <div class="main_container">
        <div>
            <h1>Личный кабинет</h1>
            <?php include_once ("../php/bd_output.php")?>
            <h2>Статус: <?php echo $row["status"]?></h2>
            <div class="catalog">
                <div class="item">Имя
                    <p><?php echo $row["name1"]?></p>
                </div>

                <div class="item">Фамилия
                    <p><?php echo $row["surname"]?></p>
                </div>
                <div class="item">Отчество
                    <p><?php echo $row["lastname"]?></p>
                </div>
                <div class="item">Дата рождения
                    <p><?php echo $row["bday"]?></p>
                </div>
                <div class="item">E-mail
                    <p><?php echo $row["email"]?></p>
                </div>
                <div class="item">Пасспортные данные
                    <p><?php echo $row["passport"]?></p>
                </div>
                <div class="item">ИНН
                    <p><?php echo $row["inn"]?></p>
                </div>
                <div class="item">СНИЛС
                    <p><?php echo $row["snils"]?></p>
                </div>
                <div class="item">Номер диплома
                    <p><?php echo $row["diplom"]?></p>
                </div>
                <div class="item">Предыдущее место работы
                    <p><?php echo $row["lastpost"]?></p>
                </div>
                <div class="item">Отдел
                    <p><?php echo $row["otdel"]?></p>
                </div>
                <div class="item">Должность
                    <p><?php echo $row["post"]?></p>
                </div>
                <div class="item">Штрафы за месяц
                    <p><?php echo $row["fine"]?></p>
                </div>
                <div class="item">Заработная плата
                    <p><?php echo $row["pay"]?></p>
                </div>
                <div class="item">Коэффициент трудового участия
                    <p><?php echo $row["coef"]?></p>
                </div>
                <div class="item">Доход в текущем месяце
                    <p><?php // расчёт дохода в текущем месяце
                        echo $row["pay"]+$row["coef"]*$row["pay"]-$row["fine"] ?></p>
                </div>

            </div>
        </div>
    </div>
</form>
</body>
</html>