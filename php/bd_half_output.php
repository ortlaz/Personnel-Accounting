<?php
include_once ("bd_connection.php");
include_once ("bd_output.php");

// сортировка таблицы на странице Администрирование для бухгалтера
$ask_name=$mysqli->query("SELECT * FROM users ORDER BY name1");
$ask_otdel=$mysqli->query("SELECT * FROM users ORDER BY pay");
$ask_status=$mysqli->query("SELECT * FROM users ORDER BY status");
$ask_c = $mysqli->query("SELECT * FROM users ORDER BY coef");
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
                            <th class="tbl">' . $row_all["otdel"] . '</th>
                            <th class="tbl">' . $row_all["post"] . '</th>
                            <th class="tbl">' . $row_all["coef"] . '</th>
                            <th class="tbl">' . $row_all["pay"] . '</th>
                            <th class="tbl">' . $row_all["fine"] . '</th>
                        
                        </tr>';
    }
} else if(isset($_GET['but2'])) {

    // сортировка по зарплате
    while($row_all = $ask_otdel->fetch_assoc()){
        echo '<tr class=info>
                            <th class="tbl">' . $row_all["id"] . '</th>
                            <th class="tbl">' . $row_all["status"] . '</th>
                            <th class="tbl">' . $row_all["name1"] . '</th>
                            <th class="tbl">' . $row_all["surname"] . '</th>
                            <th class="tbl">' . $row_all["lastname"] . '</th>
                            <th class="tbl">' . $row_all["otdel"] . '</th>
                            <th class="tbl">' . $row_all["post"] . '</th>
                            <th class="tbl">' . $row_all["coef"] . '</th>
                            <th class="tbl">' . $row_all["pay"] . '</th>
                            <th class="tbl">' . $row_all["fine"] . '</th>
           
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
                            <th class="tbl">' . $row_all["otdel"] . '</th>
                            <th class="tbl">' . $row_all["post"] . '</th>  
                            <th class="tbl">' . $row_all["coef"] . '</th>
                            <th class="tbl">' . $row_all["pay"] . '</th>
                            <th class="tbl">' . $row_all["fine"] . '</th>
                     
                        </tr>';
    }
} else if(isset($_GET['but4'])) {

    // сортировка по коэффициенту
    while($row_all = $ask_c->fetch_assoc()){
        echo '<tr class=info>
                            <th class="tbl">' . $row_all["id"] . '</th>
                            <th class="tbl">' . $row_all["status"] . '</th>
                            <th class="tbl">' . $row_all["name1"] . '</th>
                            <th class="tbl">' . $row_all["surname"] . '</th>
                            <th class="tbl">' . $row_all["lastname"] . '</th>
                            <th class="tbl">' . $row_all["otdel"] . '</th>
                            <th class="tbl">' . $row_all["post"] . '</th>
                            <th class="tbl">' . $row_all["coef"] . '</th>
                            <th class="tbl">' . $row_all["pay"] . '</th>
                            <th class="tbl">' . $row_all["fine"] . '</th>
                          
                        </tr>';
    }
} else if(isset($_GET['but0'])) {

    // вывод таблицы
    while ($row_all = $res_all->fetch_assoc()) {
        echo '<tr class=info>
                            <th class="tbl">' . $row_all["id"] . '</th>
                            <th class="tbl">' . $row_all["status"] . '</th>
                            <th class="tbl">' . $row_all["name1"] . '</th>
                            <th class="tbl">' . $row_all["surname"] . '</th>
                            <th class="tbl">' . $row_all["lastname"] . '</th>
                            <th class="tbl">' . $row_all["otdel"] . '</th>
                            <th class="tbl">' . $row_all["post"] . '</th>
                            <th class="tbl">' . $row_all["coef"] . '</th>
                            <th class="tbl">' . $row_all["pay"] . '</th>
                            <th class="tbl">' . $row_all["fine"] . '</th>
                        
                        </tr>';

    }
}


?>