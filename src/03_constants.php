<?php

# Una constante es un espacio en memoria la cual NO cambia su valor durante la ejecución del programa

# La manera estándar para nombrar las constantes es escribirlas en mayúsculas y separando cada palabra capital con un guion bajo

# Definición de una constante con "define"
# Devuelve true o false cuando logra su cometido | boolean
define('PAGE_TITLE', 'Master en PHP');

# Definición de una constante con PHP 8
// const PAGE_TITLE = 'Master en PHP';

# "defined" sirve para verificar la existencia de una constante
if (defined('PAGE_TITLE')) {
    echo '<h1>Para este ' . PAGE_TITLE . ' estoy utilizando la versión ' . PHP_VERSION . '</h1>';    
}
