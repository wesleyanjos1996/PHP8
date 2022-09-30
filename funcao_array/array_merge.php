<?php
$frutas = [
    "tropical"=>"maçã",
    "banana",
    "abacaxi"
];

$outrasFrutas = [
    "limao",
    "maçã",
    "tropical"=>"laranja"
];

var_dump(array_merge($frutas, $outrasFrutas));
echo "<br>";
?>