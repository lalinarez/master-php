<?php

/**
 * Ejercicio 2. Hacer un programa que guarde valores en un arreglo siempre y cuando su longitud sea menor a 120
 */

$length = 120;
$numbers = [];
$html = '';

function show(array $data): string
{
    $rows = '<ol>';
    for ($i = 0; $i < count($data); $i++) {
        $rows .= "<li>{$i} - {$data[$i]}</li>";
    }
    $rows .= '</ol>';
    return $rows;
}

for ($i = 1; $i < $length; $i++) {
    array_push($numbers, rand(1, 100));
}

$html .= '<h2>Lista de números aleatorios</h2>';
$html .= show($numbers);
echo $html;
