<?php

# Una variable es un espacio en memoria la cual puede cambiar su valor durante la ejecución del programa

$title = 'Titulo principal';
$description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque rem quae vel beatae, voluptates voluptas recusandae eaque a excepturi ex!';
$active = false;

# Para cambiar el valor de una variable, basta con reescribir el nombre de la misma y asignarle el valor que necesitaremos
$title = 'Titulo principal 2';

$text = '<h1 ' . ($active ? "style=\"color:green;\"" : "style=\"color:red;\"") . '>' . $title . '</h1>' . '<p>' . $description . '</p>';
# En caso de que la concatenación se vuelva insostenible, el lenguaje permite la interpolación la cual el único requisito que pide es encerrar el bloque en comillas dobles y la variable en llaves
// $text = "<h1>{$title}</h1><p>{$description}</p>";

echo $text;