<?php

# Una constante es un espacio en memoria la cual NO puede cambiar su valor durante la ejecución del programa

# La manera correcta para nombrar las constantes es escribirlas en mayúsculas y separando cada palabra con un guion bajo

# Formas de definir una constante
// define('PAGE_TITLE', 'Master en PHP');
const PAGE_TITLE = 'Master en PHP';

# defined sirve para verificar la existencia de una constante
if (defined('PAGE_TITLE')) {
    echo '<h1>Para este ' . PAGE_TITLE . ' estoy utilizando la versión ' . PHP_VERSION . '</h1>';    
}
