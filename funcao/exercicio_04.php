<?php

function calcIRPF($salario, $depedentes)
{
    //Fórmula: $imposto = (($salario - ($depedentes * 189.59)) * ($aliquota / 100)) - $deducao;

    /*
    if($salario <= 1903.98)
    {echo "Isento";}
    else if(($salario > 1903.98) && ($salario <= 2826.65))
    {echo "7,5%";}
    else if(($salario > 2826.65) && ($salario <= 3751.05))
    {echo "15%";}
    else if(($salario > 3751.05) && ($salario <= 4664.68))
    {echo "22,5%";}
    else
    {echo "27,5%";}
    */
}

calcIRPF(1903.98, 0);

//
echo "<br>";

$link = "https://www.google.com<br>";
$frase = "Vá para o site do Google<br>";

$formataLink = function ($url, $texto){echo $url.$texto;};
echo $formataLink($link, $frase);

?>