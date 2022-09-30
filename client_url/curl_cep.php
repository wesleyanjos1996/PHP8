<?php

$cep = "09750730";

$curl = curl_init();

//var_dump(CURLOPT_URL);
//exit;

curl_setopt($curl, CURLOPT_URL, "https://viacep.com.br/ws/{$cep}/json/");

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($curl);

curl_close($curl);

//echo $resposta;

$dados = json_decode($resposta, true);

echo $dados["logradouro"];
?>