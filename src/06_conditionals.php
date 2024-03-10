<?php

/**
 * Una estructura condicional se utiliza para tomar decisiones dependiendo de un valor (verdadero o falso)
 * 
 * Comúnmente en las condicionales se ocupan los otros dos tipos de operadores que tiene la programación
 * OPERADORES LÓGICOS (&&, ||, ![NOT])
 * OPERADORES DE COMPARACIÓN (==, ===, !=, !==, <, >, <=, >=)
 */

if (isset($_GET['param'])) {
    $param = $_GET['param'];
    
    # Un operador ternario es una condicional, solamente que usa menos lineas de código que un "if", de los cuales derivan
    echo "<h1>{$param} es " . ($param % 2 == 0 ? 'par' : 'impar') . "</h1>";

    // goto message;
    
    // switch ($param) {
    //     case 'CMLL':
    //     case 'EMLL':
    //     case 'CONSEJO':
    //         echo 'Consejo Mundial de Lucha Libre';
    //         break;
    //     case 'AAA':
    //         echo 'Asistencia, Asesoría y Administración de Espectáculos';
    //         break;
    //     case 'IWRG':
    //         echo 'International Wrestling Revolution Group';
    //         break;
    //     case 'BLW':
    //         echo 'Big Lucha World';
    //         break;
    //     case 'WWE':
    //         echo 'World Wrestling Enterteinment';
    //         break;
    //     case 'AEW':
    //         echo 'All Elite Wrestling';
    //         break;        
    //     case 'ROH':
    //         echo 'Ring Of Honor';
    //         break;
    //     case 'NJPW':
    //         echo 'New Japan Pro-Wrestling';
    //         break;
    //     default:
    //         echo 'Esa empresa no existe en nuestro catalogo';
    //         break;
    // }

    # El MATCH es igual al SWITCH solamente que el valor se retorna en automático, y el modo de comparación no es de igualdad sino de identidad
    $response = match ($param) {
        'CMLL', 'EMLL', 'CONSEJO'  => 'Consejo Mundial de Lucha Libre',
        'AAA' =>  'Asistencia, Asesoría y Administración de Espectáculos',
        'IWRG' =>  'International Wrestling Revolution Group',
        'BLW' =>  'Big Lucha World',
        'WWE' =>  'World Wrestling Enterteinment',
        'AEW' =>  'All Elite Wrestling',
        'ROH' =>  'Ring Of Honor',
        'NJPW' =>  'New Japan Pro-Wrestling',
        default => 'Esa empresa no existe en nuestro catalogo'
    };
    echo strtoupper($response);
} else {
    print('Por favor teclea un parámetro valido');
}

// message:
// echo '¿Con que te gusta la lucha libre?';