<?php

/*
ARRAYS:
Un array es una colección o un conjunto de datos/valores, bajo un
único nombre. Para acceder a esos valores podemos un índice número
o alfanumérico
*/

$pelicula = "Batman";
$peliculas = array("Batman", "Spiderman", "El señor de los anillos");
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

//Array asociativo
$personas = array(
    'nombre' =>'Jesús Eduardo',
    'apellido' => 'Aguilar Santiago',
    'edad' => '22 años'
);

//Recorrer array con for
echo "<h1>Listado de películas</h1>";

echo '<ul>';

for($i = 0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}

echo '</ul>';

//Recorrer array con foreach
echo "<h1>Listado de cantantes</h1>";

echo '<ul>';
foreach($cantantes as $cantante){
    echo "<li>".$cantante."</li>";
}

echo '</ul>';

//Arrays multidimensionales

$contactos = array (
    array(
        'nombre' => 'Jesús Eduardo',
        'email' => 'jesuseduardoaguilars@gmail.com'
    ),
    array(
        'nombre' => 'Oliver Jair',
        'email' => 'Oliver@gmail.com'
    ),
    array(
        'nombre' => 'María de Jesús',
        'email' => 'maria@gmail.com'
    )
);

echo "<h1>Listado de contactos</h1>";

echo '<ul>';
foreach($contactos as $contacto){
    echo "<li>Nombre: ".$contacto['nombre']."</li>";
    echo "<li>Email: ".$contacto['email']."</li>";
    echo '<br>';
}

echo '</ul>';

?>