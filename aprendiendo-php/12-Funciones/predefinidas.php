<?php

//Debuguear
$nombre = 'Jesús Eduardo Aguilar Santiago';
var_dump($nombre);
echo '<br>';

//Fechas
echo date("d-m-Y");
echo '<br>';
echo time();
echo '<br>';

//Matemáticas
echo "Raíz cuadrada de 10: ".sqrt(10);
echo '<br>';

echo "Número aleatorio entre 10 y 40: ".rand(10, 40);
echo '<br>';

echo "Número pi: ".pi();
echo '<br>';

echo "Redondear: ".round(7.819234, 2);
echo '<br>';

//Más funciones generales
echo gettype($nombre);
echo '<br>';

//Detectar tipado
if(is_string($nombre)){
    echo "Esa variable es un String";
}
echo '<br>';

if(!is_float($nombre)){
    echo "La variable nombre no es un núumero con decimales";
}
echo '<br>';

//Comprobar si existe una variable
if(isset($edad)){
    echo "La variable existe";
}
else{
    echo "La variable no existe";
}
echo '<br>';

//Limpiar espacios
$frase = "    mi contenido     ";
var_dump(trim($frase));

//Eliminar variables/indices
$year = 2020;
unset($year);
echo '<br>';

//Comprobar variables vacias
$texto = "ff";

if(empty($texto)){
    echo "La variable texto está vacía";
}
else{
     echo "La variable texto tiene contenido";
}
echo '<br>';

//Contar caracteres de un Stirng
$cadena = "12345";

echo strlen($cadena);
echo '<br>';

//Encontrar un caracter
$frase = "La vida es bella";
echo strpos($frase, "i");
echo '<br>';

//Reemplazar contenido de un String
echo str_replace("vida", "moto", $frase);
echo '<br>';

//Mayúsculas y minúsculas
echo strtolower($frase);
echo '<br>';
echo strtoupper($frase);
echo '<br>';

?>