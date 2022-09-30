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

$novosDados = array_map(function($item){
    $item["ano"] = 2022;
    $item["preco"] *= 1.1;
    return $item;
}, $dados);

var_dump($dados);
echo "<br>";
var_dump($novosDados);
?>