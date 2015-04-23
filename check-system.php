<?php

$value = ((isset($_POST['value'])) && ($_POST['value'] != "")) ? $_POST['value'] : false;

if($value){
    if($value == 1){
        echo "Hello Leonardo Rifeli!";
    }

    if($value == 2){
        echo "Hello Leonardo Rifeli 2!";
    }
}
