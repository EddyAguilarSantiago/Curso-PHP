<?php

/*
Funciones:
Una función es un conjunto de instrucciones agrupadas bajo un nombre en concreto
y que pueden reutilizarze solamente invocando a la función tantas veces como querramos.

function nombreDeMiFuncion($Parámetro){
    Bloque/Conjunto de instrucciones
}
nombreDeMiFuncion($mi_parámetro);
nombreDeMiFuncion($mi_parámetro);
*/

//Ejemplo 1
function muestraNombres(){
    echo 'Jesús Eduardo Aguilar Santiago<br>';
    echo 'Oliver Jair Aguilar Santiago<br>';
    echo 'Ángel Emmanuel Valadez Santiago<br>';
    echo 'María de Jesús Santiago Andrade<br>';
    echo '<hr>';
}

//Invocar Función
/*
muestraNombres();
muestraNombres();
muestraNombres();
*/

//Ejemplo 2
function tabla($numero){
    echo "<h3> Tabla de multiplicar del número $numero</h3>";
    for($i = 1; $i <= 10; $i++){
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br>";
    }
}

/*
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}
else{
    echo 'No hay número para multiplicar';
}
*/

/*
for($i = 1; $i <= 10; $i++){
    tabla($i);
}
*/

//Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false){
    //Cpnjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto="";

    if($negrita != false){
        $cadena_texto .= "<h1>";
    }

    $cadena_texto .= "Suma: $suma <br>";
    $cadena_texto .= "Resta: $resta <br>";
    $cadena_texto .= "Multiplicación: $multiplicacion <br>";
    $cadena_texto .= "División: $division <br>";
    
    if($negrita){
        $cadena_texto .= "</h1>";
    }

    $cadena_texto .= '<hr>';

    return $cadena_texto;
}

echo calculadora(2, 4);
echo calculadora(24, 14, true);
echo calculadora(5, 11, false);

//Ejemplo 4

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos con: $apellidos";
    return $texto;
}

function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
            ."<br>"
            .getApellidos($apellidos);
    return $texto;
}

echo devuelveElNombre('Jesús Eduardo', 'Aguilar Santiago');

?>