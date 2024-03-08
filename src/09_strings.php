<?php

# Un string es un conjunto de caracteres que se delimitan por comillas simples o dobles

$text = 'Consectetur adipisicing elit.';

// echo gettype($text);
# substr inicio = positivo, fin = negativo, cero = texto completo
// echo substr($text, 12, 11);
// echo substr_replace($text, 'iwrg', 24, 4);
// echo str_contains($text, 'elit');

echo '<pre>' . print_r(str_split(strtolower($text), 5), true) . '</pre>';