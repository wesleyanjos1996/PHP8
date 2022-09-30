<?php

//var_dump(scandir("./"));
$dir = "./uploads";

if(file_exists($dir))
{echo "Arquivo existe!<br>";}
else
{
    echo "Arquivo não encontrado!<br>";
    mkdir($dir);
    echo "Diretório criado com sucesso!<br>";
}