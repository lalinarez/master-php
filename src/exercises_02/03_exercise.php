<?php

/**
 * Ejercicio 3. Verificar si una cadena de texto esta vacía, si es así rellenarla con texto aleatorio y mostrarla
 */

$text = 'Hola mundo desde PHP';

if (empty($text)) {
    $text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quis inventore ipsa mollitia veniam rem rerum, excepturi doloremque! Odio aperiam illo perferendis sunt eveniet tenetur.';
    echo 'El relleno de mi variable es: ' . $text;
} else {
    echo 'Mi variable contiene esto: ' . $text;
}
