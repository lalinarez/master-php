<?php

/**
 * Ejercicio 5. Crear el siguiente arreglo de videojuegos para después mostrarlo en una tabla HTML
 */

function getMax(array $data): array
{
    $response = [];
    $max = 0;

    for ($i = 0; $i < count($data); $i++) {
        if (count($data[$i]) > $max) {
            $max = count($data[$i]);
            $response['index'] = $i;
        }
    }
    $response['max'] = $max;
    return $response;
}

function show(array $data): string
{
    $keys = array_keys($data); // 0 => Acción, 1 => Aventura, 2 => Deportes
    $values = array_values($data); // 0 => [INFO], 1 => [INFO]
    $max = getMax($values);
    $rows = '';
    $cont = 0;

    for ($i = 0; $i < $max['max']; $i++) {
        $rows .= '<tr>';
        for ($j = 0; $j < count($keys); $j++) {
            $rows .= '<td>' . ($values[$j][$cont] ?? '') . '</td>';
        }
        $cont++;
        $rows .= '</tr>';
    }
    return $rows;
}

$videogames = [
    'Acción' => ['GTA 5', 'Call Of Duty', 'PUGB', 'Fornite', 'Taxi Driver', 'God Of War'],
    'Aventura' => ['Assasins Creed', 'Crash Bandicoot', 'Prince Of Persia'],
    'Deportes' => ['Fifa 24', 'WWE 2K'],
    'Terror' => ['Destino Final', 'Dark Souls'],
    'Anime' => ['Yu-Gi-OH', 'Dragon Ball Super']
];
$keys = array_keys($videogames);
$table = '';

$table .= '<table border="1"><thead><tr><th colspan="' . count($keys) . '">Listado de Videojuegos</th></tr><tr>';
foreach ($keys as $key => $value) {
    $table .= "<th>{$value}</th>";
}
$table .= '</tr></thead><tbody>';
$table .= (count($keys) > 0) ? show($videogames) : '<td>No se encontraron videojuegos para mostrar</td>';
$table .= '</tbody></table>';
echo $table;
