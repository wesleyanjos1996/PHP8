<?php
$paises = array(
    "Brasil",
    "Argentina",
    "Argentina",
    200,
    200,
    100,
    "100"
);

var_dump(array_unique($paises, SORT_REGULAR));
echo "<br>";
var_dump(array_unique($paises, SORT_NUMERIC));
echo "<br>";
var_dump(array_unique($paises, SORT_STRING));
echo "<br>";
var_dump(array_unique($paises, SORT_LOCALE_STRING));
?>