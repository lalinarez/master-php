<?php

/**
 * Para imprimir en PHP contamos con "echo" y "print", pero la primera opción es mucho mejor en cuanto a rendimiento y funcionalidad
 * 
 * Nota: El uso de las comillas simples es para no gastar tantos recursos de nuestro equipo al momento de ejecutar
 */

# El "echo" puede hacer más de una salida separando por coma los argumentos
# No devuelve nada cuando logra su cometido | void
echo '<h1>Hola mundo desde PHP ' . PHP_VERSION . '</h1>', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio a atque sit quos reiciendis, officia obcaecati nulla incidunt sequi totam fugiat dolore et architecto tenetur asperiores, ipsam delectus voluptatem officiis eos cum quaerat tempora ab voluptates. Quam impedit nostrum velit eaque, culpa doloribus aliquam rerum? Animi unde sint optio iste?</p>';

# El "print" solamente hace una salida
# Devuelve el valor de 1 cuando logra su cometido | int
$returned = print '<h1>Hola mundo desde PHP ' . PHP_VERSION . '</h1>';
// print($returned);
