<?php

/**
 * Ejercicio 2. Imprimir todos los números pares que existen desde el 1 hasta el 100
 */

$i = 1;
while ($i <= 100) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
    $i++;
}