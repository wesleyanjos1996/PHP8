<?php

$tot = 200.00;
$valueA = $tot;

//$valueA /= 2;
//echo $valueA."<br>";

$descOff = 33;
$form = $descOff / 100;
$valueA *= $form;

echo $valueA."<br>";

echo $tot -= $valueA;

?>