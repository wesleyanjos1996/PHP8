<?php

// 1. Crie três variáveis para armazenar o seu nome, idade e esporte predileto.
$name = "Wesley dos Anjos ";
$yo = 25;
$sport = "Automobilismo";


// 2. Crie um array com três tecnologias que você pretende apreder.
$tecno = array("Linux", "Laravel", "YiiFramework");


// 3. Converta a variável com a idade para string e mostre com var_dump o valo dela antes e depois da conversão.
var_dump($yo);
/*
$newYo = (string) $yo;
echo "<br>";
var_dump($newYo);
*/
settype($yo, "string");
echo "<br>";
var_dump(get_debug_type($yo));


// 4. Imprima na tela os valores de nome, idade e esporte predileto criados no escopo global por meio de uma função.
function show($n, $i, $s)
{
    return "<hr>Seu nome é <strong>$n</strong><br>Sua idade é: <strong>$i</strong><br>E seu esporte predileto é: <b>$s</b><hr>";
}
echo show($name, $yo, $sport);

?>