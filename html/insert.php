<!DOCTYPE html>
<?php include_once ('../php/session.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Моя работа.ру</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
<div class="zag">
    <h2>Учет кадров</h2>
    </div>
    <div id="log_in" >
            <form method="get" >
                <h1 class="login_header">Вход</h1>
                <div id="login_form">
                    <input type="text" class="big_text" name="email" id="email" value="" placeholder="введите email">
                    <p>
                    <input type="password" class="big_text" name="pass" id="pass" value="" placeholder="введите пароль">
                    </p>
                     <p class="keeplogin">
                      <?php // вывод сообщения
                        if (!empty($message)) {
                         echo "<p class=\"error\">" . $message . "</p>";
                    }?>
                     </p>
                     <p>
                    <button name="login_button" id="login_button">Войти</button>
                    <a name="reg_button" id="reg_button" href="registration.php" style="" >Регистрация</a>
                </p>
                </div>
            </form>
    </div>

</body>
</html>