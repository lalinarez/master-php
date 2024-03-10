<?php

/**
 * Ejercicio 2. Crear una función para validar un correo electrónico con la función "filter var" y mediante [GET] recibir un valor para enseguida mostrarlo
 */

function validate(string $email): string
{
    $message = 'El formato del correo electrónico que intenta ingresar no es valido';
    if (filter_var($email, FILTER_VALIDATE_EMAIL) != false)
        $message = "El correo <b>{$email}</b> es valido para nuestro sistema";

    return $message;
}

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    echo validate($email);
}
