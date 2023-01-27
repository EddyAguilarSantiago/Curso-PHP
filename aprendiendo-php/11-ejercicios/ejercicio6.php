<?php

echo 'Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10.<hr>';

echo '<table border="1"';
echo '<tr>';//Cabecera de la tabla
for($i = 1; $i <= 10; $i++){
    echo "<th colspan=\"5\">Tabla de Multiplicar del $i</th>";
}
echo '</tr>';
//Cuerpo de la tabla
for($i = 1; $i <= 10; $i++){
    echo '<tr>';
    for($j = 1; $j <= 10; $j++){
        echo "<td>$j</td>";
        echo "<td>X</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo '<td>'.($i * $j).'</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>