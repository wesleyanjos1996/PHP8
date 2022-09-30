<?php
/************************************ 
var_dump(SODIUM_LIBRARY_MAJOR_VERSION);
var_dump(SODIUM_LIBRARY_MINOR_VERSION);
var_dump(SODIUM_LIBRARY_VERSION);

// Linux/Ubuntu: sudo apt install php-libsodium
***************************************/

$mensagem = "Hcode Treinamentos";

//$chave = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);
//file_put_contents("./chave.key", $chave);

$chave = file_get_contents("./chave.key");

$iv =  random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

$mensagemCifrada = sodium_crypto_secretbox($mensagem, $iv, $chave);

//var_dump(base64_encode($mensagemCifrada));

$mensagemDecifrada = sodium_crypto_secretbox_open($mensagemCifrada, $iv, $chave);

var_dump($mensagem);
var_dump($mensagemCifrada);
var_dump($mensagemDecifrada);
?>