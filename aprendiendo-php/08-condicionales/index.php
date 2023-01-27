<?php

/*
Condicional IF

if(condicion){
    instrucciones
}
else{
    otraas instrucciones
}

//Operadores de comparación
==  igual
=== idéntico
!=  diferente
<>  diferente
!== no idéntico
<   menor que
>   mayor que
<=  menor o igual que
>=  mayor o igual que

//Operadores Lógicos
$$ AND Y
|| OR  O
!  NOT NO
and, or
*/

//Ejemplo 1
$color = "verde";

if($color == "rojo"){
    echo 'El color es Rojo';
}
else{
    echo 'El color NO es rojo';
}

echo '<br>';

//Ejemplo 2
$year = 2018;

if($year != 2019){
    echo 'Es un año diferente a 2019';
}
else{
    echo 'Estamos a 2019';
}

echo '<hr>';

//Ejemplo 3
$nombre = "David Extremadura";
$ciudad = "Madrid";
$continente = "Europa";
$edad = 42;
$mayoria_edad = 18;

if($edad >= $mayoria_edad){
    echo "<h1>$nombre es mayor de edad </h1>";
    if($continente == "Europa"){
        echo "<h2>y es de $ciudad</h2>";
    }
    else{
        echo 'No es Europeo';
    }
}
else{
    echo "<h1>$nombre NO es mayor de edad </h1>";
}

echo '<hr>';

//Ejemplo 4
$dia = 3;

/*
if($dia == 1){
    echo 'Es Lunes';
}
else{
    if($dia == 2){
        echo 'Es Martes';
    }
    else{
        if($dia == 3){
            echo 'Es Miércoles';
        }
        else{
            if($dia == 4){
                echo 'Es Jueves';
            }
            else{
                if($dia == 5){
                    echo 'Es Viernes';
                }
                else{
                    echo 'Es din de Semana';
                }
            }
        }
    }
}
*/

if($dia == 1){
    echo 'LUNES';
}
elseif($dia == 2){
    echo 'MARTES';
}
elseif($dia == 3){
    echo 'MIÉRCOLES';
}
elseif($dia == 4){
    echo 'JUEVES';
}
elseif($dia == 5){
    echo 'VIERNES';
}
else{
    echo 'FINDE';
}

echo '<hr>';

//SWITCH
$dia = 4;

switch ($dia){
    case 1:
        echo 'LUNES';
        break;
    case 2:
        echo 'MARTES';
        break;
    case 3:
        echo 'MIÉRCOLES';
        break;
    case 4:
        echo 'JUEVES';
        break;
    case 5:
        echo 'VIERNES';
        break;
    default:
        echo 'ES FIN DE SEMANA';
        break;
}

echo '<hr>';

//Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo 'Esta en edad de trabajar';
}
else{
    echo 'No puede trabajar';
}

echo '<hr>';

$pais = "Mexico";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo 'En este país se habla Español';
}
else{
    echo 'En este país NO se habla Español';
}

echo '<hr>';

//GOTO
goto marca;
echo '<h3>Instrucción 1</h3>';
echo '<h3>Instrucción 2</h3>';
echo '<h3>Instrucción 3</h3>';
echo '<h3>Instrucción 4</h3>';

marca:
echo '<h1>Me he saltado 4 echos</h1>'

?>