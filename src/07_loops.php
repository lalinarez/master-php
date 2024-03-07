<?php

# Los bucles se utilizan para ejecutar el mismo bloque de código una y otra vez, siempre que se cumpla una determinada condición (verdadero o falso)

if (isset($_GET['param'])) {
    $param = $_GET['param'];
    $limit = $_GET['limit'] ?? 10;
    $i = 1;
    $results = '';

    // while ($i <= $limit) {
    //     $results .= '<tr>
    //         <td>' . $i . '</td>
    //         <td>*</td>
    //         <td>' . $param . '</td>
    //         <td>=</td>
    //         <td>' . ($i * $param) . '</td>
    //     </tr>';

    //     $i++;
    // }

    # El DO se ejecutara por lo menos una vez, hasta que deje de cumplirse la condición del WHILE
    // do {
    //     $results .= '<tr>
    //         <td>' . $i . '</td>
    //         <td>*</td>
    //         <td>' . $param . '</td>
    //         <td>=</td>
    //         <td>' . ($i * $param) . '</td>
    //     </tr>';

    //     $i++;
    // } while ($i <= $limit);

    for ($i; $i <= $limit; $i++) { 
        $results .= '<tr>
            <td>' . $i . '</td>
            <td>*</td>
            <td>' . $param . '</td>
            <td>=</td>
            <td>' . ($i * $param) . '</td>
        </tr>';
    }

    echo '<table>
            <thead>
                <th colspan="5">Tabla de multiplicar del ' . $param . '</th>
            </thead>
            <tbody>' . $results . '</tbody>
        </table>';

    // $users = ['Luis Linarez', 'Francisco Natura', 'Victor Robles', 'Alberto Gonzalez', 'Angel Díaz', 'Marlene Lira'];
    // $list = '<ul>';
    // foreach ($users as $key => $user) {
    //     $list .= '<li>' . (++$key) . ' - ' . $user . '</li>';
    // }
    // $list .= '</ul>';
    // echo $list;
} else {
    print('Por favor teclea un parámetro valido');
}
