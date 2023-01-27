<?php

echo 'Ejercicio 4: Crear un Script en PHP que tenga 4 variables,
una de tipo array, otra de tipo String, otra int y otra booleana
y que imprima un mensaje según el tipo de variable que sea.<hr>';

$array = array("Este", "es", "un", "array");
$string = ("String");
$int = 4;
$boolean = true;

if(is_array($array)){
    for ($i=0; $i < count($array); $i++) {
        echo "$array[$i] ";
    }
}

echo '<br>';

if(is_string($string)){
    echo "$string";
}

echo '<br>';

if(is_int($int)){
    echo "$int";
}

echo '<br>';

if(is_bool($boolean)){
    echo "$boolean";
}

?>