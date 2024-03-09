<?php
// session_name('mySession');
// session_start();

/**
 * Una sesión sirve para ofrecer persistencia a ciertos datos durante las peticiones subsiguientes, siempre y cuando el usuario no cierre sesión o el navegador
 * Una cookie sirve para ofrecer persistencia a ciertos datos durante el lapso de vida dada en la misma
 * 
 * Las cookies no son recomendadas para almacenar información sensible puesto que es información enviada por el usuario
 */

// $_SESSION['id'] = 1;
// echo '<h1>' . session_id() . '</h1>';
// echo '<h3>Mis variables de sesión:</h3><pre>' . print_r($_SESSION, true) . '</pre';
// echo '<p>El id del usuario es: ' . $_SESSION['id'] . '</p>';

if (isset($_GET['theme'])) {
    $theme = $_GET['theme'];
    setrawcookie('color-theme', match ($theme) {
        'dark' => '#5E6161',
        'green' => '#9BE38D',
        'violet' => '#DE8DE3',
        default => '#FFFFFF'
    });
    
    echo '<style> body { background-color: ' . $_COOKIE['color-theme'] . ' !important}</style>';
}
