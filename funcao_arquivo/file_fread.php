<?php

$fileName = "./arquivo.csv";

$file = fopen("./arquivo.csv", "a+");
//$file = fopen("./arquivo.csv", "r+");
echo "Abriu o arquivo!<br>";

var_dump(filesize($fileName));

$resgitro = "Wesley dos Anjos; wesley@mail.com; 25\r\n";
var_dump(fwrite($file, $resgitro));

rewind($file);

var_dump(fread($file, filesize($fileName)));

rewind($file);

fseek($file, 10);

var_dump(fwrite($file, "--ESCREVE AQUI--"));

fclose($file);
echo "Fechou o arquivo!";

?>