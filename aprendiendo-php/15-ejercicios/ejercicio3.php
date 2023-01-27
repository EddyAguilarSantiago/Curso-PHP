<?php

echo 'Ejercicio 3: Programa que compruebe si una variable está vacía y si está
vacía rellenarla con texto en minúsculas y mostrarlo en mayúscular y negrita.<hr>';

$variable = "";

if(empty($variable)){
    $texto = "Este Es Un Texto";
    $variable = strtolower($texto);
    echo strtoupper($variable);
}
else{
    echo 'La variable no está vacía';
}

?>