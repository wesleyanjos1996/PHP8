<?php

//8c1b964c700f70854c711f6f71049784
//8c1b964c700f70854c711f6f71049784

//jBuWTHAPcIVMcR9vcQSXhD3rOdtRKuHUgkJah8+UGI48lddaq3hedpD8bniTu9+6

//var_dump(openssl_get_cipher_methods());

$cifra = "AES-128-CBC";

$chave = random_bytes(32);

//var_dump(bin2hex($chave));

$iv = random_bytes(openssl_cipher_iv_length($cifra));

//var_dump(bin2hex($iv));

$mensagemOriginal = "Curso de PHP8 da Hcode";

$mensagemCriptrografado = openssl_encrypt($mensagemOriginal, $cifra, $chave, OPENSSL_RAW_DATA, $iv);

$resultadoFinal = base64_encode($iv.$mensagemCriptrografado);

//var_dump("base64: ", $resultadoFinal);

//var_dump(bin2hex($mensagemCriptrografado));

/****************************************************************************/
//$bytes = base64_decode("jBuWTHAPcIVMcR9vcQSXhD3rOdtRKuHUgkJah8+UGI48lddaq3hedpD8bniTu9+6");
$bytes = base64_decode($resultadoFinal);

$meuIv = mb_substr($bytes, 0, openssl_cipher_iv_length($cifra), "8bit");

$textoAberto = mb_substr($bytes, openssl_cipher_iv_length($cifra), NULL, "8bit");

//var_dump(bin2hex($textoAberto));

$mensagemDescriptrografado = openssl_decrypt($textoAberto, $cifra, $chave, OPENSSL_RAW_DATA, $iv);

var_dump($mensagemDescriptrografado);

?>