<?php

# Una variable es un espacio en memoria la cual puede cambiar su valor durante la ejecución del programa

$title = 'Titulo principal';
$description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque rem quae vel beatae, voluptates voluptas recusandae eaque a excepturi ex!';
$active = false;

# Si queremos y tenemos que cambiar el valor de una variable, basta con reescribir el nombre de la misma y asignarle un valor diferente
$title = 'Titulo principal 2';

$text = '<h1 style="color: ' . ($active ? 'green' : 'red') . '">' . $title . '</h1>' . '<p>' . $description . '</p>';

# En caso de que la concatenación se vuelva insostenible, el lenguaje permite la interpolación de variables, la cual obligatoriamente debe imprimirse entre comillas dobles
// $text = "<h1 style='color: " . ($active ? 'green' : 'red') . "'>{$title}</h1><p>{$description}</p>";

echo $text;