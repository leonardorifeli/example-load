<?php

$value = ((isset($_POST['value'])) && ($_POST['value'] != "")) ? $_POST['value'] : false;
$type = ((isset($_POST['type'])) && ($_POST['type'] != "")) ? $_POST['type'] : false;

if($value){

    if($type == 1){
        echo "Your name: {$value}";

        return false;
    }

    if($value == 1){
        echo "Hello Leonardo Rifeli!";
    }

    if($value == 2){
        echo "Hello Leonardo Rifeli 2!";
    }
}
