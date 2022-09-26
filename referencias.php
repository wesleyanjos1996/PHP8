<?php

$a = 50;
$b = &$a;
$c = $a;

var_dump("a", $a);
var_dump("b", $b);
var_dump("c", $c);
echo "<br>";

$a = 250;
var_dump("a", $a);
var_dump("b", $b);
var_dump("c", $c);

?>