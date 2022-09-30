<?php
$cores = array("Vermelho", "Preto", "Amarelo");

// Adicionar e remover elemento do fim de um array
var_dump($cores);
array_push($cores, "Branco"); #Adiciona no final do array
echo "<br>";
var_dump($cores);
echo "<br>";
array_pop($cores); #Remove elemento do final do array
echo "<br>";
var_dump($cores);
echo "<br>";
//var_dump(array_pop($cores));

//Adicionando e removendo elemento no inicio do array
var_dump(array_unshift($cores, "Laranja")); #Adiciona no inicio do array
echo "<br>";
var_dump($cores);
var_dump(array_shift($cores)); #Remove no inicio do array
echo "<br>";
var_dump($cores);
?>