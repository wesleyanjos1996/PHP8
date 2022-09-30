<?php

$paises = [
    "Estados Unidos",
    "Russia",
    "China",
    "Japão",
    "Egito",
    "Brasil"
];

var_dump(array_slice($paises, 1, 4));
var_dump(array_slice($paises, 0, 2));
var_dump(array_slice($paises, 1, 4, true));

var_dump(array_splice($paises, 2, 2, ["França", "Itália"]));
var_dump($paises);

?>