<?php

# Una funcionalidad global (variable y/o función) es toda aquella que esta cargada por defecto en el lenguaje de programación

# En SERVER obtenemos toda la información acerca del equipo en donde se esta ejecutando la página
echo '<pre>' . print_r($_SERVER, true) . '</pre>';

setcookie('color-theme', '#408080', 0);
echo '<pre>' . print_r($_COOKIE, true) . '</pre>';

echo '<pre>' . print_r(getenv(), true) . '</pre>';

# En GET vamos a obtener información que se pase a traves de la URL hacia el servidor
echo '<pre>' . print_r($_GET, true) . '</pre>';
echo $_GET['id'] ?? '';


