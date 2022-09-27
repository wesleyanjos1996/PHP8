<?php
$msg = "200";

$retorn = match($msg)
{
    "200"=>"Sucesso",
    "300"=>"Redirect",
    "400"=>"Erro",
    default=>"Padrão"
};

var_dump($retorn);
?>