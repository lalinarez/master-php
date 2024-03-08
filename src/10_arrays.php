<?php

# Un array o arreglo es una colección de datos que suelen ser del mismo tipo

// $sum = 0;
// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// for ($i = 0; $i < count($numbers); $i++) {
//     if (is_numeric($numbers[$i])) {
//         $sum += $numbers[$i];
//     }
// }
// echo "La suma de los números es: {$sum}";

$list = '';
$companies = ['CMLL', 'AAA', 'IWRG', 'BIG LUCHA WORLD', 'WWE', 'AEW', 'ROH', 'NJPW', 'DTU', 'KAOZ LUCHA LIBRE'];
array_push($companies, 'PWG', 'AJPW');
array_multisort($companies);
$list .= '<h2>Listado de empresas que se dedican a la lucha libre</h2><ul>';
// foreach ($companies as $key => $company) {
//     $list .= '<li>' . $company . '</li>';
// }
array_map(function ($company) {
    global $list;
    $list .= '<li>' . $company . '</li>';
}, $companies);

$list .= '</ul>';
echo $list;

# Los arreglos asociativos son aquellos que emparejan una llave con un valor dependiendo la misma

// $movie = ['id' => 1, 'title' => 'Forrest Gump', 'slug' => 'forrest-gump', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci maxime nobis esse quaerat cum nulla quae dolor iste accusamus. Praesentium.', 'year' => '1994'];
// echo "<h1>{$movie['title']} - <span style=\"color: blue;\">{$movie['year']}</span></h1><p>{$movie['description']}</p><a href=\"#movie-{$movie['slug']}-watch\">Ver</a>";

// $movies = [
//     ['id' => 1, 'title' => 'Toy Story', 'slug' => 'toy-story', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci maxime nobis esse quaerat cum nulla quae dolor iste accusamus. Praesentium.', 'year' => '1995'],
//     ['id' => 2, 'title' => 'Coco', 'slug' => 'coco', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci maxime nobis esse quaerat cum nulla quae dolor iste accusamus. Praesentium.', 'year' => '2017'],
//     ['id' => 3, 'title' => 'Iron Man 1', 'slug' => 'iron-man', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci maxime nobis esse quaerat cum nulla quae dolor iste accusamus. Praesentium.', 'year' => '2008'],
//     ['id' => 4, 'title' => 'Avengers End Game', 'slug' => 'avengers-endgame', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci maxime nobis esse quaerat cum nulla quae dolor iste accusamus. Praesentium.', 'year' => '2019'],
//     ['id' => 5, 'title' => 'The Mean Girls', 'slug' => 'the-mean-girls', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci maxime nobis esse quaerat cum nulla quae dolor iste accusamus. Praesentium.', 'year' => '2004']
// ];

// $i = 0;
// while ($i < count($movies)) {
//     echo "<h1>{$movies[$i]['title']} - <span style=\"color: blue;\">{$movies[$i]['year']}</span></h1><p>{$movies[$i]['description']}</p><a href=\"#movie-{$movies[$i]['slug']}-watch\">Ver</a>";
//     $i++;
// }