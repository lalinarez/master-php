<?php

/**
 * Ejercicio 3. Imprimir el cubo de los primeros 40 números naturales
 */

$i = 1;
$rows = '';

do {
    $rows .= '<tr>
        <td>' . $i . '^2</td>
        <td>' . ($i ** 2) . '</td>
    </tr>';
    $i++;
} while ($i <= 40);

echo '<table border="1">
        <thead>
            <th>Número</th>
            <th>Resultado</th>
        </thead>
        <tbody>' . $rows . '</tbody>
    </table>';