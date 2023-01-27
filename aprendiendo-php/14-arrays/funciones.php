<?php

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
$numeros = [1, 2, 5, 8, 3, 4];

//Ordenar
asort($cantantes);

foreach($cantantes as $cantante){
    echo $cantante;
    echo '<br>';
}

echo '<br>';

arsort($cantantes);

foreach($cantantes as $cantante){
    echo $cantante;
    echo '<br>';
}

echo '<br>';

asort($numeros);

foreach($numeros as $numero){
    echo $numero;
    echo '<br>';
}

echo '<br>';

//Añadir elementos a un array
$cantantes[] = "Natos";
array_push($cantantes, "Waor");

//Eliminar elementos a un array
array_pop($cantantes);
unset($cantantes[2]);

//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

echo '<br>';
echo '<br>';

foreach($cantantes as $cantante){
    echo $cantante;
    echo '<br>';
}

echo '<br>';

//Dar la vuelta
$numerosReversa = array_reverse($numeros);

foreach($numerosReversa as $numero){
    echo $numero;
    echo '<br>';
}

echo '<br>';

//Buscar dentro de un array
$resultado = array_search('Drake', $cantantes);
echo $resultado;

echo '<br>';
echo '<br>';

//Contar número de elementos
echo count($cantantes);

echo '<br>';

echo sizeof($cantantes);

echo '<br>';

?>