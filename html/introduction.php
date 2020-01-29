<!DOCTYPE html>
<?php include_once ("../php/session.php");
    include_once ("../php/bd_output.php")?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать!</title>
    <link rel="stylesheet" type="text/css" href="../css/introduction.css">
</head>
<body>
<form class="" method="GET">
    <header>
        <div class="container">
            <nav>
                <ul class="menu">
                    <li>
                        <a class="logo" href = "#">Моя работа.ру</a>
                    </li>
                    <li>
                        <a href = "lks.php">Личный кабинет</a>
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
        <h1>Добро пожаловать, <?php echo $row['name1'] ?>! </h1>
        <p><i>Рады видеть вас в нашей компании. В личном кабинете вы сможете увидеть персональные данные, а также отслеживать продвижение по службе, размер заработной платы и многое другое.</i></p>
        <div class="info">По вопросам, касаемо работы сайта обращайтесь к главному администратору <a class="mail">green_square@bk.com</a> </div>
    </div>
</form>
</body>
</html>