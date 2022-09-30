<?php
$paises = array("Brasil", "Argentina", "Chile", "Colombia", "Equador", "10");
var_dump($paises);

var_dump(in_array("i", $paises));
echo "<br>";
var_dump(in_array("brasil", $paises));
echo "<br>";
var_dump(in_array("Brasil", $paises));
echo "<br>";
var_dump(array_search("Chile", $paises));
echo "<br>";
var_dump(array_search("chile", $paises));
echo "<br>";
var_dump(array_search("Brasil", $paises));
echo "<br>";
var_dump(array_search(10, $paises));
echo "<br>";
var_dump(array_search(10, $paises, true));
echo "<br>";

$country = array("Brasil" => 210, "Argentina" => 50, "Chile" => 40, "Colombia" => 45, "Equador" => 30, "10");
var_dump(array_key_exists("Brasil", $country));
?>