<?php
$eua = ["vermelho", "azul", "branco"];
$cores = ["vermelho", "amarelo", "verde"];
$brasil = ["amarelo", "verde", "azul"];


var_dump(array_diff($cores, $brasil));
echo "<br>";
var_dump(array_diff($eua, $cores));
echo "<br>";
var_dump(array_diff($eua, $cores, $brasil));
?>