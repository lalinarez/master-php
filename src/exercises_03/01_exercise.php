<?php
session_start();

/**
 * Ejercicio 1. Crear una sesión que aumente o disminuya su valor en 1 si el parámetro counter [GET] esta en 1 o 0
 */

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

if (isset($_GET['counter'])) {
    if ($_GET['counter'] == 1) {
        $_SESSION['counter'] += 1;
    }
    if ($_GET['counter'] == 0) {
        $_SESSION['counter'] -= 1;
    }
    echo "<h1>El valor actual del contador es: {$_SESSION['counter']}</h1>";
}

echo '<a href="/?counter=1">Aumentar</a> <a href="/?counter=0">Disminuir</a>';
