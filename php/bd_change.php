<?php
include_once ("bd_connection.php");
include_once ("check_point.php");

if(isset($_GET['id'])&& isset($_GET['new_val'])&&isset($_GET['but'])) {
    $id = $_GET['id']; // id пользователя
    $value = $_GET['value']; // поле для изменения
    $new_val=$_GET['new_val']; // новое значение

// изменяем соответствующее поле
     switch($value){
        case "name1": $ask= $mysqli->query("UPDATE users SET name1='$new_val' WHERE id=".$id);break;
        case "surname": $ask= $mysqli->query("UPDATE users SET surname='$new_val' WHERE id=".$id);break;
        case "lastname": $ask= $mysqli->query("UPDATE users SET lastname='$new_val' WHERE id=".$id);break;
        case "inn": $ask= $mysqli->query("UPDATE users SET inn='$new_val' WHERE id=".$id);break;
        case "snils": $ask= $mysqli->query("UPDATE users SET snils='$new_val' WHERE id=".$id);break;
        case "email": $ask= $mysqli->query("UPDATE users SET email='$new_val' WHERE id=".$id);break;
        case "diplom": $ask= $mysqli->query("UPDATE users SET diplom='$new_val' WHERE id=".$id);break;
        case "otdel": $ask= $mysqli->query("UPDATE users SET otdel='$new_val' WHERE id=".$id);break;
        case "post": $ask= $mysqli->query("UPDATE users SET post='$new_val' WHERE id=".$id);break;
        case "lastpost": $ask= $mysqli->query("UPDATE users SET lastpost='$new_val' WHERE id=".$id);break;
        case "status": $ask= $mysqli->query("UPDATE users SET status='$new_val' WHERE id=".$id);break;
        case "coef": $ask= $mysqli->query("UPDATE users SET coef='$new_val' WHERE id=".$id);break;
        case "pay": $ask= $mysqli->query("UPDATE users SET pay='$new_val' WHERE id=".$id);break;
        case "passport": $ask= $mysqli->query("UPDATE users SET passport='$new_val' WHERE id=".$id);break;
        case "fine": $ask= $mysqli->query("UPDATE users SET fine='$new_val' WHERE id=".$id);break;
        case "admin": $ask= $mysqli->query("UPDATE users SET admin='$new_val' WHERE id=".$id);break;
        default: $message="No match!"; break;
    }

    $message = "Успешно изменено.";
}

// вывод сообщения
if (!empty($message)) {
    echo "<p class=\"error\">" . $message . "</p>";
}

?>