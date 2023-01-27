<?php

echo 'Ejercicio2: Escribir un programa en PHP que añada valores a un array
mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla.<hr>';

$numeros = array();

function mostrarArray($numeros){
    $resultado = "";

    $resultado .= '<ul>';
    
    foreach($numeros as $numero){
        $resultado .= "<li>$numero</li>";
    }
    
    $resultado .= '</ul>';

    return $resultado;

}

for($i = 1; $i <= 120; $i++){
    array_push($numeros, rand(1, 120));
}

echo '<h1>Lista de números</h1>';

echo mostrarArray($numeros);

?>