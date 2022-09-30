<?php
//$frutas = ["maça", "uva", "pêra", "manga"];
//echo $frutas[1];

$frutas = [
    "estacao"=>"maça",
    "doce"=>"uva",
    "pêra",
    "tropical"=>"manga",
    "uva"
];
var_dump($frutas);
echo "<br>";
var_dump(array_keys($frutas));
echo "<br>";
var_dump(array_keys($frutas, "uva"));
echo "<br>";
var_dump(array_values($frutas));
echo "<br>";
?>