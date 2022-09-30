<?php

$cartas = ["A♥️", "K♥️", "2♥️", "3♥️", "4♥️"];

var_dump($cartas);
var_dump(shuffle($cartas));
var_dump($cartas);

var_dump($cartas[array_rand($cartas)]);

$resultado = array_rand($cartas, 2);

var_dump($resultado);
?>