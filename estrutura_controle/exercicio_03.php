<?php

// 1. Crie três variáveis, $autorizado, $admin e $nome. Avalie se a variável $autorizado for igual a verdadeiro e $admin igual a verdadeiro escreva na tela: "Área Administrativa, $nome, Bem vindo!".
$autorizado = true;
$admin = true;
$nome = "Wesley dos Anjos";

if($autorizado == true && $admin == true)
{echo "Área Administrativa, $nome, Bem vindo!<br>";}


// 2. Crie quatro variáveis, $quantidade, $valorUnitario, $subtotal e $frete. A variável $subtotal receberá $quantidade multiplicado por $valorUnitario. Se o cliente comprar acima de 3 unidades aplique um desconto em $subtotal de 10% do valor da compra, caso contrário aplique um desconto de 5%. Em seguida será somando o valor de frete em subtotal Para a massa de tese utiliza: $quantidade = 2; $valorUnitario = 1200.00; $frete = 40.00
$quantidade = 2;
$valorUnitario = 1200.00;
$frete = 40.00;

$subtotal = $quantidade * $valorUnitario;

if($quantidade > 3)
{$subtotal *= (1 - 0.10);}
else
{$subtotal *= (1 - 0.05);}

$subtotal += $frete;


// 3. Exibir com var_dumo no final o Valor total cobrado
var_dump($subtotal);
echo "<br>";


// 4. Crie um contador para ir de 1920 a 2022.
for($c = 1920; $c < 2023; $c++)
{echo "$c ";}

echo "<br>";


// 5. Este contador precisa armazenar uma instrução HTML dentro de uma variável string $option com a seguinte estrutura: '<option value="$valor">$valor</option>'.
for ($ano = 1920; $ano <= 2022; $ano++)
{echo "<option value='$ano'>$ano</option>";}

echo "<br>";


// 6. Crie uma condição dentro deste contador, se o $ano for igual a 2021 imprima o atributo selected conforme a estrutura a seguir: '<option value="$valor" selected="selected">$valor</option>'
echo "<select>";
for ($ano = 1920; $ano <= 2022; $ano++)
{echo "<option value='$ano' " . ($ano == 2021 ? "selected='selected'" : "") . ">$ano</option>";}

echo "</select>";