<?php
function estaVacio($var){
 return empty(trim($var));
}

function esTexto($var){
    return preg_match('/^[a-zA-Z ]+$/',$var);
}
/*
function esMail($var){
    return filter_var($var,FILTER_VALIDATE_EMAIL);
}*/

function esCodigo($var){
    return preg_match('/^(PROD)[0-9]{5}$/',$var);
}

function esTelefono($var){
    return preg_match('/^[267][0-9]{3}-?[0-9]{4}$/',$var);
}

function esPrecio($var){
    return preg_match('/^[0-9]+((\.)?)[0-9]*?$/',$var);
}

function esExistencias($var){
    return preg_match('/^[0-9]*$/',$var);
}




?>