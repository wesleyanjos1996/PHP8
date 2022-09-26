<?php

$value = "1";
var_dump(get_debug_type($value));

$value *= 2;
echo "<br>";
var_dump(get_debug_type($value));

$value *= 2.5;
echo "<br>";
var_dump(get_debug_type($value));

$newValue = (string) $value;
echo "<br>";
var_dump(get_debug_type($newValue));


settype($newValue, "float");
echo "<br>";
var_dump(get_debug_type($newValue));

settype($newValue, "integer");
echo "<br>";
var_dump($value);
var_dump(get_debug_type($newValue));

?>