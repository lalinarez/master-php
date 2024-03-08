<?php

/**
 * Ejercicio 1. Hacer un programa que guarde 8 números enteros y haga lo siguiente:
 * Recorrerlo y mostrarlo
 * Ordenarlo y mostrarlo
 * Mostrar su longitud
 * Buscar un elemento en especifico
 */

$length = 10;
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

for ($i = 1; $i <= $length; $i++) {
    array_push($numbers, rand(1, 100));
}

$html .= '<h2>Estos son mis ' . count($numbers) . ' números originales</h2><ul>';
$html .= show($numbers);
$html .= '</ul>';

$html .= '<h2>Así se ven ordenados</h2><ul>';
array_multisort($numbers);
$html .= show($numbers);
$html .= '</ul>';
echo $html;

$search = rand(1, 100);
echo array_search($search, $numbers) ? 'El valor ' . $search . ' SI se encuentra en la lista.' : 'El valor ' . $search . ' NO se encuentra en la lista. Intente nuevamente con otro';