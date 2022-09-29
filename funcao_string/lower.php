<?php

$name = "JOão;HEnrique;rangel";

echo strtolower($name)."<br>";
echo strtoupper($name)."<br>";
echo mb_strtoupper($name)."<br>";

echo ucfirst(mb_strtolower($name))."<br>";
echo ucwords(mb_strtolower($name), ";")."<br>";
echo str_replace(";", " ", ucwords(mb_strtolower($name), ";"))."<br>";

$formatCSV = fn($string, $delimiter = ";") => str_replace($delimiter, " ", ucwords(mb_strtolower($string), $delimiter))."<br>";
echo $formatCSV($name);

?>