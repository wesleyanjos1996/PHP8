<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://localhost:8181/post.php");

$dados = [
    "nome" => "Wesley",
    "email" => "wesley@mail.com.br"
];

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($curl);

curl_close($curl);

echo $resposta;

?>