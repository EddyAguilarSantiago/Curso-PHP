<?php

echo 'Ejericio 1: Hacer un programa en PHP que tenga un array
con 8 números enteros y que haga lo siguiente:<br>
- Recorrerlo y mostrarlo.<br>
- Ordenarlo y mostrarlo.<br>
- Mostrar su longitud.<br>
- Buscar algún elemento (Buscar el elemento que me llegue por la URL).<hr>';

$numeros = [4, 3, 7 , 2, 9, 1, 3, 6];

function mostrarArray($numeros){
    $resultado = "";

    $resultado .= '<ul>';
    
    foreach($numeros as $numero){
        $resultado .= "<li>$numero</li>";
    }
    
    $resultado .= '</ul>';

    return $resultado;

}

echo '<h1>Lista de números</h1>';

echo mostrarArray($numeros);

echo '<br>';

echo '<h1>Lista de números ordenados</h1>';

sort($numeros);

echo mostrarArray($numeros);

echo '<br>';

echo '<h1>Longitud del arreglo</h1>';

echo count($numeros);

echo '<h1>Búsqueda de un número</h1>';

if(isset($_GET['busqueda'])){
    $busqueda = $_GET['busqueda'];

    $search = array_search($busqueda, $numeros);

    if(!empty($search)){
        echo "<h4>El número $busqueda existe en el array y está en la posición $search</h4>";
    }
    else{
        echo "<h4>El número $busqueda no existe en el array</h4>";
    }
}
else{
    echo 'No se envió el número a buscar por la URL';
}

?>