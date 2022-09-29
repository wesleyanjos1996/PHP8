<?php

function formatarMoeda(float $valor): string
{
    return "R$".number_format($valor, 2, ",", ".");
}

$reais = "5522.53";
echo formatarMoeda($reais);

//
echo "<br>";

$aereas = "Gol|Tam|Latam|Azul|American Airlines";

$formatCSV = fn($string, $delimiter = "|") => str_replace($delimiter, " ", ucwords(mb_strtolower($string), $delimiter))."<br>";

echo $formatCSV($aereas);

?>