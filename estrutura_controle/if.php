<?php

$a = 10;
$b = $a + 1;

if($a > $b)
{echo "Sim";}
else if(!$b % 2 === 0)
{echo "B não é par";}
else
{echo "Não";}

echo "<br>";

echo $a > $b ?"SIM":"NÃO";
?>