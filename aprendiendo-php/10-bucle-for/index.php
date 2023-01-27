<?php

/*FOR
for(variable contador, condicion, actualización del contador){
    Bloque de instrucciones
}
*/

// $resultado = 0;

// for($i = 0; $i <= 100; $i++){
//     $resultado += $i;
//     echo "<p>$resultado";
// }

// echo "<h1>El resultado es $resultado</h1>";

//Ejemplo de tabla de multiplicar
if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}
else{
    $numero = 1;
}

echo "<h1>Table de multiplicar del número $numero</h1>";

$contador = 1;
for($contador = 1; $contador <= 10; $contador++){

    if($numero == 45){
        echo 'No se pueden mostrar estas operaciones prohibidas';
        break;
    }
    echo "$numero x $contador = ".($contador * $numero)."<br>";
}

?>