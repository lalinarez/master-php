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
    $rows = '<ol>';
    for ($i = 0; $i < count($data); $i++) {
        $rows .= "<li>{$i} - {$data[$i]}</li>";
    }
    $rows .= '</ol>';
    return $rows;
}

for ($i = 1; $i <= $length; $i++) {
    array_push($numbers, rand(1, 100));
}

$html .= '<h2>Estos son mis ' . count($numbers) . ' números originales</h2>';
$html .= show($numbers);
$html .= '<h2>Así se ven ordenados</h2>';
array_multisort($numbers);
$html .= show($numbers);
echo $html;

$search = rand(1, 100);
$index = array_search($search, $numbers);

echo "El valor {$search} " . ($index !== false ? 'si' : 'no' ) . ' se encuentra en esta lista' . ($index !== false ? " | indice {$index}" : '');