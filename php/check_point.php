<?php

// проверка e-mail
function mail1($mail1){
    if (!filter_var($mail1, FILTER_VALIDATE_EMAIL)) {

        return false;
        } else return true;
}

// проверка введенных данных на присутствие только цифр
function numbers ($num){
    if (!ctype_digit ($num)){
        return false;
    } else return true;
}

// проверка на непустоту
function ne_nul($x){
    if($x!=NULL){
        return true;
    } else return false;
}

?>



