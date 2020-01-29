<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="../css/reg.css">

</head>
<body>
<form class="" method="GET" >
    <header>
        <div class="container1">

            <nav>
                <ul class="menu">
                    <li>
                            <a class="logo" >Моя работа.ру</a>
                    </li>
                    <li>
                        <a href = "insert.php">Вход</a>
                    </li>
                    <li>
                        <a href = "#">Регистрация</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="row main-form">
<div class="container">
    <div>
        <h1>Регистрация</h1>
    </div>
    <p> <?php include_once ("../php/bd_input.php"); ?> </p>
    <div class="left_form">
            <div class="form-group">
                <label>Имя</label>
                <div class="input-group">
                        <input type="text" required name="1name" class="form-control" placeholder="Введите имя"/>
                </div>
                <label class="form-control2">Дата рождения</label>
                <div class="input-group">
                    <input  required name="bday" type="date" class="form-control2"/>
                </div>
            </div>

            <div class="form-group">
                <label >Фамилия</label>
                <div class="input-group">
                    <input type="text" required name="surname" class="form-control" placeholder="Введите фамилию"/>
                </div>
                <label class="form-control2">Серия и номер паспорта</label>
                <div class="input-group">
                    <input required name="passport_num" type="text" class="form-control2"/>
                </div>
            </div>

            <div class="form-group">
                <label>Отчество</label>
                <div class="input-group">
                    <input type="text" required name="lastname" class="form-control" placeholder="Введите отчество"/>
                </div>
                <label class="form-control2">ИНН</label>
                <div class="input-group">
                    <input id="inn" required name="inn" type="text" class="form-control2"/>
                </div>
            </div>

            <div class="form-group">
                <label>Email</label>
                <div class="input-group">
                    <input type="text"  id="e_mail" class="form-control" required name="email" placeholder="Введите Email"/>

                </div>
                <label class="form-control2">СНИЛС</label>
                <div class="input-group">
                    <input id="snils" required name="snils" type="text" class="form-control2"/>
                </div>
            </div>

            <div class="form-group">
                <label>Пароль</label>
                <div class="input-group">
                        <input type="password" class="form-control" required name="password" placeholder="Введите пароль"/>
                </div>
            </div>

            <div class="form-group">
                <label>Подтверждение пароля</label>
                <div class="input-group">
                    <input type="password" class="form-control" required name="check_pas" placeholder="Введите пароль еще раз"/>
                </div>

                <label class="form-control2">Номер диплома</label>
                <div class="input-group">
                    <input id="education" type="text" class="form-control2" required name="diplom"/>
                </div>
            </div>

            <div class="form-group">
                <label>Отдел</label>
                <div class="input-group">
                    <select name="otdel">
                        <option value="Коммерческий">Коммерческий</option>
                        <option value="Юридический">Юридический</option>
                        <option value="Отдел кадров">Отдел кадров</option>
                        <option value="Финансовый">Финансовый</option>
                        <option value="Бухгалтерия">Бухгалтерия</option>
                        <option value="Информационный">Информационный</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="form-control2">Должность</label>
                <div class="input-group">
                   <input type="text" required name="post" class="form-control2" placeholder="Введите должность"/>
                </div>
            </div>

            <div class="form-group">
                <label>Предыдущее место работы</label>
                <div class="input-group">
                    <input type="text" required name="lastpost" class="form-control" placeholder="Введите название"/>
                </div>
            </div>
    </div>

    <div class="form-group">

        <input class="button" id="button" name="but" type="submit" value="Зарегистрироваться">

            </div>

</div>
    </div>

</form>
</body>
</html>





