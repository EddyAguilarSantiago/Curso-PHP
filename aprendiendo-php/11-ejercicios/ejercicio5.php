<?php

echo 'Ejercicio 5: Hacer un programa que muestre todos los números entre'
.'dos números que nos llegen por la URL ($_GET).<hr>';

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 > $numero2){
        echo 'El número 1 es mayor al número 2';
    }
    else{
        do{
            echo $numero1.'<br>';
            $numero1++;
        }while($numero1<=$numero2);
    }
}
else{
    echo '<h1>Introduce correctamente los valores por la URL';
}

?>