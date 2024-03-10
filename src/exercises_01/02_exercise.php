<?php

/**
 * Ejercicio 2. Imprimir todos los números pares que existen desde el 1 hasta el 100
 */

$i = 1;
$numbers = '';

while ($i <= 100) {
    if ($i % 2 == 0) {
        $numbers .= $i . ', ';
    }
    $i++;
}
echo 'Números pares del 1-100: ' . substr($numbers, 0, -2);