<?php

# Una función es un conjunto de instrucciones que resuelven un objetivo común y promueven la reutilización de código

// $first = 5;
// $last = 10;

// function multiplicationTable($number, $limit = 10)
// {
//     $rows = '';
//     for ($i = 1; $i <= $limit; $i++) {
//         $rows .= '<tr>
//                 <td>' . $i . '</td>
//                 <td>*</td>
//                 <td>' . $number . '</td>
//                 <td>=</td>
//                 <td>' . ($i * $number) . '</td>
//             </tr>';
//     }
//     echo '<table border="1">
//                 <thead>
//                     <th colspan="5">Tabla de multiplicar del ' . $number . '</th>
//                 </thead>
//                 <tbody>' . $rows . '</tbody>
//             </table>';
// }

// function index()
// {
//     # Cuando se desea utilizar una variable global del archivo o aplicación dentro de una función, debemos anteponerles la expresión "global"
//     global $first, $last;

//     for ($i = $first; $i <= $last; $i++) {
//         multiplicationTable($i);
//     }
// }
// index();

# Cuando quieras utilizar muchos parámetros en una función, pero no sabes cuantos ni cuales son, simplemente coloca el operador splat (...) en el parámetro o argumento de la función solicitada
# Desde la salida de PHP 8 ya podemos tipar variables, funciones, atributos, constantes y demás
function add(int $a, int $b, int $c): int
{
    return $a + $b + $c;
}

# Parámetro
function sum(...$numbers): float | int
{
    $result = 0;
    foreach ($numbers as $key => $value) {
        if (is_numeric($value)) {
            $result += $value;
        }
    }
    return $result;
}

$numbers = [10, 20, 30, 40, 50, 49.5, .5];

# Argumento
echo sum('luis', ...$numbers);
echo '<br>';
echo add(...$numbers);
