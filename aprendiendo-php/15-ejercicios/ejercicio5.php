<?php

echo 'Ejercicio: Crear un array con el contenido de la tabla:<br>
Accion---Aventura---------Deportes<br>
GTA------Assasins---------FIFA 19<br>
COD------Crash------------PES19<br>
PUGB-----Price of persia--MOTO GP 19

Cada fila debe ir en un fichero separado (includes).<hr>';

$tabla = array(
    "ACCION" => array("GTA 5", "Call of Duty", "PUGB"),
    "AVENTURA" => array("Assasins Creed", "Crash Bandicoot", "Prince of Percia"),
    "DEPORTES" => array("Fifa 19", "PES 19", "Moto GP 19")
);

$categorías = array_keys($tabla);

?>

<table border="1px">
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/fila1.php'; ?>
    <?php require_once 'ejercicio5/fila2.php'; ?>
    <?php require_once 'ejercicio5/fila3.php'; ?>
</table>