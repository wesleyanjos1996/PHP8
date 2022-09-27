<?php
var_dump(10 < 2);

$a = 10;
$b = "10";

var_dump($a == $b);
var_dump($a === $b);
var_dump($a >= $b);
var_dump($a <= $b);
var_dump($a <=> $b);

$c = NULL;
var_dump($c ?? "Não há valor!");
?>