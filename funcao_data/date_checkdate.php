<?php

$dataNascimento = "29/02/1976";

$dataArray = explode("/", $dataNascimento);

$dia = (int)$dataArray[0];
$mes = (int)$dataArray[1];
$ano = (int)$dataArray[2];

var_dump($dia, $mes, $ano);

//Checkdate() - Verifica a data pelo calendário gregoriano
var_dump(checkdate($mes, $dia, $ano));

?>