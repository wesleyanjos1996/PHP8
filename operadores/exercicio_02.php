<?php

// 1. Crie três variáveis: preço, desconto e frete sendo os valores 1000.00, 10 e 35.49
$preco = 1000.00;
$desconto = 10;
$frete = 35.49;


// 2. Em uma linha crie uma variável chamada total que conterá o desconto aplicado ao valor e no final somando o frete.
$total = ($preco * (1 - ($desconto / 100))) + $frete;

// 3. Crie uma variável chamada compra que conterá um valor boolean verdadeiro se o valor da variável total for até o valor do preço e menor que mil e vinte.
$compra = $total <= $preco && $total < 1020;


// 4. Exibir  com var_dump no final as variáveis total e compra
var_dump($total);
echo "<br>";
var_dump($compra);
?>