<?php
$a = 10;
$b = 20;
$c = 30;

var_dump($a > $b && $a > $c);
var_dump($a < $b || $a > $c);
var_dump(!($a < $b));
var_dump(!($a > $b && $a > $c));
var_dump(!(true && false));
var_dump(true || false);
var_dump(true);
var_dump(!true);

var_dump(true || true);
var_dump(true xor true);
var_dump(false xor true);
?>