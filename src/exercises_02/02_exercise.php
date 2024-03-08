<?php

/**
 * Ejercicio 2. Hacer un programa que guarde valores en un arreglo siempre y cuando su longitud sea menor a 120
 */

$length = 120;
$numbers = [];
$html = '';

function show(array $data): string
{
    $result = '';
    for ($i = 0; $i < count($data); $i++) {
        $result .= '<li>' . $data[$i] . '</li>';
    }
    return $result;
}

for ($i = 1; $i < $length; $i++) {
    array_push($numbers, rand(1, 100));
}

$html .= '<h2>Números</h2><ul>';
$html .= show($numbers);
$html .= '</ul>';
echo $html;
