<?php

function show(){
    echo "Funkcja show<br><br>";
}

function showName($name){

    return "Imię: ".$name;

}


function stringValidate($name){

    $name = str_replace(" ","",$name);
    $name = trim($name," ");
    $name = strtolower($name);
    $name = ucfirst($name);
    $name = substr($name,0,10); 

    return $name;

   

}


?>