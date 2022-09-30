<?php

$file = fopen("./arquivo.csv", "r");
//$file = fopen("./arquivo2.csv", "a+");
//$file = fopen("./arquivo.csv", "w");
$file = fopen("./arq.csv", "x");

echo "Abriu o arquivo";

fclose($file);

echo "Fechou";

?>