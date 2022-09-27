<?php

function somar($numA, $numB){echo $numA + $numB."<br>";}

somar(10, 5);
somar(2, 5);

$a = 50;

function soma(&$numA, $numB)
{
    $numA += $numB;
    echo $numA."<br>";
}

soma($a, 5);

echo "Agora fora da função: $a<br>";

function somarValor($numA = 9, $numB = 10){echo $numA + $numB."<br>";}
somarValor();
somarValor(5,25);

//Novidade do PHP8 Passagem de parâmetros por nome
//////////////////////////////////////////////////
function passagemSoma($numA, $numB)
{
    $numA += $numB;
    echo $numA."<br>";
}

$num = 10;
passagemSoma(numB: 30, numA: $num);
//////////////////////////////////////////////////

?>