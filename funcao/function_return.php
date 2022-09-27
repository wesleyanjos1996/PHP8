<?php

function somar(float $valor1, float $valor2){return $valor1 + $valor2;}

$resultado = somar(10, 20);

echo $resultado;
echo "<br>".somar($resultado, 50);

function somarValor(float $valor1, float $valor2):string{return $valor1 + $valor2;}

echo "<br>".somar(30, 50)."<br>";
var_dump(somar(30, 50));

?>