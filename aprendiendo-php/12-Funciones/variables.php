<?php

/*
Variales locales: Las que se definen dentro de una función y no pueden ser usadas fuera
de la función, sólo están disponibles dentro, a no ser que hagamos un return

Variables globales: Las que se declaran fuera de una función y están disponibles dentro
y fuera de las funciones
*/

//Variable global
$frase = "Ni los genios son tan genios ni los mediocres tan mediocres";
echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";

    //Variable local
    $year = 2019;
    echo "<h1>$year</h1>";

    return $year;
}

echo holaMundo();

// echo "<br>$year<br>";

//Funciones variables
function buenasDias(){
    return "<h1>Hola, buenos días :)</h1>";
}

function buenasTardes(){
    return "<h1>Hey, qué tal ha ido la comida?</h1>";
}

function buenasNoches(){
    return "<h1>Te vas a dormir ya? Buenas noches</h1>";
}

$horario = "dias";

$miFuncion = "buenas".$horario;
echo $miFuncion();

?>