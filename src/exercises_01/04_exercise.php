<?php

/**
 * Ejercicio 4. Recibir 2 valores por la URL (GET) y realizar las operaciones básicas de una calculadora (suma, resta, producto, division, residuo y potencia)
 */

if (isset($_GET['first']) and isset($_GET['second'])) {
    $first = $_GET['first'];
    $second = $_GET['second'];

    echo '<table>
        <thead>
            <tr>
                <th>Operación</th>
                <th>Primer Número</th>
                <th>Segundo Número</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>+</td>
                <td>' . $first . '</td>
                <td>' . $second . '</td>
                <td>' . ($first + $second) . '</td>
            </tr>
            <tr>
                <td>-</td>
                <td>' . $first . '</td>
                <td>' . $second . '</td>
                <td>' . ($first - $second) . '</td>
            </tr>
            <tr>
                <td>*</td>
                <td>' . $first . '</td>
                <td>' . $second . '</td>
                <td>' . ($first * $second) . '</td>
            </tr>
            <tr>
                <td>/</td>
                <td>' . $first . '</td>
                <td>' . $second . '</td>
                <td>' . ($first / $second) . '</td>
            </tr>
            <tr>
                <td>%</td>
                <td>' . $first . '</td>
                <td>' . $second . '</td>
                <td>' . ($first % $second) . '</td>
            </tr>
            <tr>
                <td>Cubo</td>
                <td>' . $first . '</td>
                <td>' . $second . '</td>
                <td>' . ($first ** $second) . '</td>
            </tr>
        </tbody>
    </table>';
} else {
    echo 'Son obligatorios ambos parámetros para poder realizar las operaciones pertinentes';
}