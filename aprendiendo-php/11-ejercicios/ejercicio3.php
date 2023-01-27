<?php

echo 'Ejercicio 3: Escribir un prgrama que imprima por pantalla los cuadrados'
.'de los 40 primeros números naturales (Utilizar bloque while).<hr>';

$contador = 0;

while($contador <= 40){
    echo "El cuadrado de $contador es ".($contador * $contador).'<br>';
    $contador++;
}

?>