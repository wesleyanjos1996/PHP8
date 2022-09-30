<?php

$dados = [
    "um" => [
        "modelo" => "Onix",
        "ano" => 2020,
        "preco" => 50000,
        "fabricante" => "gm"
    ],
    "dois" => [
        "modelo" => "Cruze",
        "ano" => 2021,
        "preco" => 100000,
        "fabricante" => "gm"
    ],
    "tres" => [
        "modelo" => "Palio",
        "ano" => 1998,
        "preco" => 7500,
        "fabricante" => "fiat"
    ]
];

var_dump($dados);

echo "<br>";

$filter = array_filter($dados, function($item, $chaves){
    //return $item["fabricante"] === "gm";
    var_dump($chaves);
    return $item["ano"] < 2021 && $chaves >= 1;
}, 
//ARRAY_FILTER_USE_KEY
ARRAY_FILTER_USE_BOTH
);

var_dump($filter);
?>