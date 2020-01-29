<?php

include_once ("bd_connection.php");
include_once ("bd_output.php");

// сортировка таблицы на странице Администрирование для администратора
$ask_name=$mysqli->query("SELECT * FROM users ORDER BY name1");
$ask_otdel=$mysqli->query("SELECT * FROM users ORDER BY otdel");
$ask_status=$mysqli->query("SELECT * FROM users ORDER BY status");
$ask_fired=$mysqli->query("SELECT * FROM fired");
$res_all = $mysqli->query("SELECT * FROM users ORDER BY id");


if(isset($_GET['but1'])){

    // сортировка по имени
    while($row_all=$ask_name->fetch_assoc()){
        echo '<tr class=info>
                            <th class="tbl">' . $row_all["id"] . '</th>
                            <th class="tbl">' . $row_all["status"] . '</th>
                            <th class="tbl">' . $row_all["name1"] . '</th>
                            <th class="tbl">' . $row_all["surname"] . '</th>
                            <th class="tbl">' . $row_all["lastname"] . '</th>
                            <th class="tbl">' . $row_all["bday"] . '</th>
                            <th class="tbl">' . $row_all["passport"] . '</th>
                            <th class="tbl">' . $row_all["inn"] . '</th>
                            <th class="tbl">' . $row_all["snils"] . '</th>
                            <th class="tbl">' . $row_all["email"] . '</th>
                            <th class="tbl">' . $row_all["password"] . '</th>
                            <th class="tbl">' . $row_all["diplom"] . '</th>
                            <th class="tbl">' . $row_all["otdel"] . '</th>
                            <th class="tbl">' . $row_all["post"] . '</th>
                            <th class="tbl">' . $row_all["lastpost"] . '</th>
                            <th class="tbl">' . $row_all["coef"] . '</th>
                            <th class="tbl">' . $row_all["pay"] . '</th>
                            <th class="tbl">' . $row_all["fine"] . '</th>
                            <th class="tbl">' . $row_all["admin"] . '</th>
                        </tr>';
    }
} else if(isset($_GET['but2'])) {

    // сортировка по отделу
   while($row_all = $ask_otdel->fetch_assoc()){
       echo '<tr class=info>
                            <th class="tbl">' . $row_all["id"] . '</th>
                            <th class="tbl">' . $row_all["status"] . '</th>
                            <th class="tbl">' . $row_all["name1"] . '</th>
                            <th class="tbl">' . $row_all["surname"] . '</th>
                            <th class="tbl">' . $row_all["lastname"] . '</th>
                            <th class="tbl">' . $row_all["bday"] . '</th>
                            <th class="tbl">' . $row_all["passport"] . '</th>
                            <th class="tbl">' . $row_all["inn"] . '</th>
                            <th class="tbl">' . $row_all["snils"] . '</th>
                            <th class="tbl">' . $row_all["email"] . '</th>
                            <th class="tbl">' . $row_all["password"] . '</th>
                            <th class="tbl">' . $row_all["diplom"] . '</th>
                            <th class="tbl">' . $row_all["otdel"] . '</th>
                            <th class="tbl">' . $row_all["post"] . '</th>
                            <th class="tbl">' . $row_all["lastpost"] . '</th>
                            <th class="tbl">' . $row_all["coef"] . '</th>
                            <th class="tbl">' . $row_all["pay"] . '</th>
                            <th class="tbl">' . $row_all["fine"] . '</th>
                            <th class="tbl">' . $row_all["admin"] . '</th>
                        </tr>';
   }
} else if(isset($_GET['but3'])) {

    // сортировка по статусу
    while($row_all = $ask_status->fetch_assoc()){
        echo '<tr class=info>
                            <th class="tbl">' . $row_all["id"] . '</th>
                            <th class="tbl">' . $row_all["status"] . '</th>
                            <th class="tbl">' . $row_all["name1"] . '</th>
                            <th class="tbl">' . $row_all["surname"] . '</th>
                            <th class="tbl">' . $row_all["lastname"] . '</th>
                            <th class="tbl">' . $row_all["bday"] . '</th>
                            <th class="tbl">' . $row_all["passport"] . '</th>
                            <th class="tbl">' . $row_all["inn"] . '</th>
                            <th class="tbl">' . $row_all["snils"] . '</th>
                            <th class="tbl">' . $row_all["email"] . '</th>
                            <th class="tbl">' . $row_all["password"] . '</th>
                            <th class="tbl">' . $row_all["diplom"] . '</th>
                            <th class="tbl">' . $row_all["otdel"] . '</th>
                            <th class="tbl">' . $row_all["post"] . '</th>
                            <th class="tbl">' . $row_all["lastpost"] . '</th>
                            <th class="tbl">' . $row_all["coef"] . '</th>
                            <th class="tbl">' . $row_all["pay"] . '</th>
                            <th class="tbl">' . $row_all["fine"] . '</th>
                            <th class="tbl">' . $row_all["admin"] . '</th>
                        </tr>';
    }
} else if(isset($_GET['but0'])) {

    // вывод таблицы без сортировки
    while ($row_all = $res_all->fetch_assoc()) {
        echo '<tr class=info>
                            <th class="tbl">' . $row_all["id"] . '</th>
                            <th class="tbl">' . $row_all["status"] . '</th>
                            <th class="tbl">' . $row_all["name1"] . '</th>
                            <th class="tbl">' . $row_all["surname"] . '</th>
                            <th class="tbl">' . $row_all["lastname"] . '</th>
                            <th class="tbl">' . $row_all["bday"] . '</th>
                            <th class="tbl">' . $row_all["passport"] . '</th>
                            <th class="tbl">' . $row_all["inn"] . '</th>
                            <th class="tbl">' . $row_all["snils"] . '</th>
                            <th class="tbl">' . $row_all["email"] . '</th>
                            <th class="tbl">' . $row_all["password"] . '</th>
                            <th class="tbl">' . $row_all["diplom"] . '</th>
                            <th class="tbl">' . $row_all["otdel"] . '</th>
                            <th class="tbl">' . $row_all["post"] . '</th>
                            <th class="tbl">' . $row_all["lastpost"] . '</th>
                            <th class="tbl">' . $row_all["coef"] . '</th>
                            <th class="tbl">' . $row_all["pay"] . '</th>
                            <th class="tbl">' . $row_all["fine"] . '</th>
                            <th class="tbl">' . $row_all["admin"] . '</th>
                        </tr>';

    }
}else if(isset($_GET['fired_but'])) {

    // вывод  таблицы уволенных сотрудников
    while ($row_all = $ask_fired->fetch_assoc()) {
        echo '<tr class=info>
                            <th class="tbl">' . $row_all["id"] . '</th>
                            <th class="tbl">' . $row_all["status"] . '</th>
                            <th class="tbl">' . $row_all["name1"] . '</th>
                            <th class="tbl">' . $row_all["surname"] . '</th>
                            <th class="tbl">' . $row_all["lastname"] . '</th>
                            <th class="tbl">' . $row_all["bday"] . '</th>
                            <th class="tbl">' . $row_all["passport"] . '</th>
                            <th class="tbl">' . $row_all["inn"] . '</th>
                            <th class="tbl">' . $row_all["snils"] . '</th>
                            <th class="tbl">' . $row_all["email"] . '</th>
                            <th class="tbl">' . $row_all["password"] . '</th>
                            <th class="tbl">' . $row_all["diplom"] . '</th>
                            <th class="tbl">' . $row_all["otdel"] . '</th>
                            <th class="tbl">' . $row_all["post"] . '</th>
                            <th class="tbl">' . $row_all["lastpost"] . '</th>
                            <th class="tbl">' . $row_all["coef"] . '</th>
                            <th class="tbl">' . $row_all["pay"] . '</th>
                            <th class="tbl">' . $row_all["fine"] . '</th>
                            <th class="tbl">' . $row_all["admin"] . '</th>
                        </tr>';

    }
}


?>