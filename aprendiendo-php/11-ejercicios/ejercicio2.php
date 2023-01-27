<?php

echo 'Ejercicio 2: Escribir un Script en PHP que nos muestre en pantalla todos los números'
.'que hay del 1 al 1000.<hr>';

for($i = 1; $i <= 100; $i++){
    if($i % 2 == 0){
        echo $i;
        if($i != 100){
            echo ', ';
        }
    }
}


?>