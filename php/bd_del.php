<?php
include_once ("bd_connection.php");

// восстановление уволенного сотрудника
if(isset($_GET['restore'])){
    $roww=$mysqli->query("SELECT * FROM fired");
    $id2 = $_GET['id2'];
    while ($arr=$roww->fetch_assoc()) {

        // проверка на наличие сотруднека в таблице fired
        if ($id2 == $arr['id']) {
            $asking = $mysqli->query("UPDATE fired SET status='Сотрудник' WHERE id=" . $id2);
            $mess="Успех";
        }else $mess=NULL;
    }
    if(empty($mess)){
        $mess="Сотрудник не уволен";
    }

 // вывод сообщения
    if (!empty($mess)) {
        echo "<p class=\"error\">" . $mess . "</p>";
        $mess=NULL;
    }
}

// фильтр уволенных сотрудников
if(isset($_GET['del_but'])) {
    $asking1 = $mysqli->query("INSERT INTO fired SELECT * FROM users WHERE status='Уволен'");
    $asking2=$mysqli->query("DELETE FROM users WHERE status='Уволен'");
    $asking3=$mysqli->query("INSERT INTO users SELECT * FROM fired WHERE status!='Уволен'");
    $asking4=$mysqli->query("DELETE FROM fired WHERE status!='Уволен'");
}

?>