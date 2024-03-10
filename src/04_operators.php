<?php

# Operadores Aritméticos

$first = 10;
$second = 34;

echo '<table border="1">
        <thead>
            <tr><th colspan="4">Operadores Aritméticos</th></tr>
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
            <tr>
                <td>Incremento ++</td>
                <td>' . $first . '</td>
                <td colspan="2">' . (++$first) . '</td>
            </tr>
            <tr>
                <td>Decremento --</td>
                <td>' . $second . '</td>
                <td colspan="2">' . (--$second) . '</td>
            </tr>
        </tbody>
    </table>';

# Operadores de Asignación

// $third = 45;
// $third += 5;
// $third -= 5;
// $third *= 5;
// $third /= 5;
// $third %= 5;
// $third **= 5;

// print $third;