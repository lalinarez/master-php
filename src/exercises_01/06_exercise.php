<?php

/**
 * Ejercicio 6. Mostrar las primeras 10 tablas de multiplicar dentro de tablas HTML
 */

$i = 1;
$e = 1;
$rows = '';

for ($i; $i <= 10; $i++) {
    while ($e <= 10) {
        $rows .= '<tr>
            <td>' . $i . '</td>
            <td>*</td>
            <td>' . $e . '</td>
            <td>=</td>
            <td>' . ($i * $e) . '</td>
        </tr>';
        $e++;
    }

    echo '<table border="1">
        <thead>
            <th colspan="5">Tabla de multiplicar del ' . $i . '</th>
        </thead>
        <tbody>' . $rows . '</tbody>
    </table><hr>';
 
    $e = 1;
    $rows = '';
}