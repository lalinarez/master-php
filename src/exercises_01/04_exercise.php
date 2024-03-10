<?php

/**
 * Ejercicio 4. Recibir 2 valores por la URL [GET] y realizar las operaciones básicas de una calculadora (suma, resta, producto, division, residuo y potencia)
 */

if (isset($_GET['first']) and isset($_GET['second'])) {
    $first = $_GET['first'];
    $second = $_GET['second'];

    echo '<table border="1">
        <thead>
            <tr>
                <th>Primer Número</th>
                <th>Operación</th>
                <th>Segundo Número</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>' . $first . '</td>
                <td>+</td>
                <td>' . $second . '</td>
                <td>' . ($first + $second) . '</td>
            </tr>
            <tr>
                <td>' . $first . '</td>
                <td>-</td>
                <td>' . $second . '</td>
                <td>' . ($first - $second) . '</td>
            </tr>
            <tr>
                <td>' . $first . '</td>
                <td>*</td>
                <td>' . $second . '</td>
                <td>' . ($first * $second) . '</td>
            </tr>
            <tr>
                <td>' . $first . '</td>
                <td>/</td>
                <td>' . $second . '</td>
                <td>' . ($first / $second) . '</td>
            </tr>
            <tr>
                <td>' . $first . '</td>
                <td>%</td>
                <td>' . $second . '</td>
                <td>' . ($first % $second) . '</td>
            </tr>
            <tr>
                <td>' . $first . '</td>
                <td>^2</td>
                <td>' . $second . '</td>
                <td>' . ($first ** $second) . '</td>
            </tr>
        </tbody>
    </table>';
} else {
    echo 'Son obligatorios ambos parámetros para poder realizar las operaciones pertinentes';
}