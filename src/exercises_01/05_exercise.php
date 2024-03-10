<?php

/**
 * Ejercicio 5. Imprimir todos los números que existan dentro de un rango delimitado por dos números pasados mediante la URL [GET]
 */

if (isset($_GET['first']) and isset($_GET['second'])) {
    $first = $_GET['first'];
    $second = $_GET['second'];
    $numbers = '';

    if ($first < $second) {
        for ($i = $first; $i <= $second; $i++) { 
            $numbers .= $i . ', ';
        }
        echo "Números del {$first}-{$second}: " . substr($numbers, 0, -2);
    } else {
        echo 'El orden de tus números no es el correcto. El primer valor debe ser menor al segundo';
    }
} else {
    echo 'Son obligatorios ambos parámetros para poder realizar las operaciones pertinentes';
}