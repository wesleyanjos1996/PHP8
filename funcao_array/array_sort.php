<?php

$carros = ["Corsa", "Palio", "Gol", "Uno", "Zafira", "Fiesta", "Civic"];

var_dump($carros);

var_dump(sort($carros));
var_dump($carros);

$arquivos = [
    "4_imagem.png",
    "3_imagem.png",
    "6_imagem.png",
    "2_imagem.png",
    "8_imagem.png",
    "1_imagem.png",
    "5_imagem.png",
    "7_imagem.png",
    "9_imagem.png",
    "10_imagem.png"
];

sort($arquivos);

var_dump($arquivos);

sort($arquivos, SORT_NUMERIC);
var_dump($arquivos);

sort($arquivos, SORT_NATURAL);
var_dump($arquivos);
?>