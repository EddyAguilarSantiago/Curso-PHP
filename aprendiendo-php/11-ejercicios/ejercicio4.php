<?php

echo 'Ejercicio 4: Recoger 2 números por la URL (Parámetros GET) y hacer todas'
.'las operaciones básicas de una calculadora (suma, resta, multiplicación y división)'
.'de esos dos números.<hr>';

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "$numero1 + $numero2 = ".($numero1 + $numero2).'<br>';
    echo "$numero1 - $numero2 = ".($numero1 - $numero2).'<br>';
    echo "$numero1 * $numero2 = ".($numero1 * $numero2).'<br>';
    echo "$numero1 / $numero2 = ".($numero1 / $numero2).'<br>';
}
else{
    echo '<h1>Introduce correctamente los valores por la URL';
}

?>