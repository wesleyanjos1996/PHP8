<?php

$carros = ["Corsa", "Palio", "Gol", "Uno", "Zafira", "Fiesta", "Civic"];
$carros2 = array("Corsa", "Palio", "Gol", "Uno", "Zafira", "Fiesta", "Civic");

echo json_encode($carros);
echo "<br>";
echo json_encode($carros2);

echo "<br>";

$veiculos = [
    "bikes" => [
        "150cc",
        "zip",
    ],
    "cars" => [
        "Corsa",
        "Palio",
        "Gol",
        "Uno",
        "Zafira",
        "Fiesta",
        "Civic"
    ]
];

echo json_encode($veiculos);

$dados = '{"bikes":["150cc","zip"],"cars":["Corsa","Palio","Gol","Uno","Zafira","Fiesta","Civic"]}';

echo "<br>";

var_dump(json_decode($dados, true));
?>