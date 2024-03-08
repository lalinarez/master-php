<?php

/**
 * Ejercicio 4. Crear 4 variables (array, string, integer y boolean) y mostrar por pantalla si el valor asignado corresponde al tipo de dato
 */

$myArray = [1,2,3,4,5];
$myString = 'My Text';
$myInteger = 28;
$myBoolean = true;

if (is_array($myArray)) {
    echo '<h3>Verificación del arreglo - 100%</h3>';
}
if (is_string($myString)) {
    echo '<h3>Verificación de la cadena de texto - 100%</h3>';
}
if (is_int($myInteger)) {
    echo '<h3>Verificación de número entero - 100%</h3>';
}
if (is_bool($myBoolean)) {
    echo '<h3>Verificación del booleano - 100%</h3>';
}