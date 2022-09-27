<?php
$a = ["Gol", "Latam", "Azul"];
$b = ["Delta", "British Airlines", "American Airlines", "Qatar Airways", "Emirates"];

$c = $a + $b;
var_dump($c);

$d = [200, 50, 35];
$e = [2 => 35, 0 => 200, 1 => "50"];
var_dump($d == $e);
var_dump($d === $e);
?>