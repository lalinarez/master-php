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
    $html = '';
    $cont = 0;

    for ($i = 0; $i < $max['max']; $i++) {
        $html .= '<tr>';
        for ($j = 0; $j < count($keys); $j++) {
            $html .= '<td>' . ($values[$j][$cont] ?? '') . '</td>';
        }
        $cont++;
        $html .= '</tr>';
    }
    return $html;
}

$html = '';
$videogames = [
    'Acción' => ['GTA 5', 'Call Of Duty', 'PUGB', 'Fornite', 'Taxi Driver', 'God Of War'],
    'Aventura' => ['Assasins Creed', 'Crash Bandicoot', 'Prince Of Persia'],
    'Deportes' => ['Fifa 24', 'WWE 2K'],
    'Terror' => ['Destino Final', 'Dark Souls'],
    'Anime' => ['Yu-Gi-OH', 'Dragon Ball Super']
];
$keys = array_keys($videogames);

$html .= '<table border="1"><thead><tr><th colspan="' . count($keys) . '">Listado de Videojuegos</th></tr><tr>';
foreach ($keys as $key => $value) {
    $html .= "<th>{$value}</th>";
}
$html .= '</tr></thead><tbody>';
$html .= (count($keys) > 0) ? show($videogames) : '<td>No se encontraron videojuegos para mostrar</td>';
$html .= '</tbody></table>';
echo $html;
