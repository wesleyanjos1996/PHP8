<?php

$salt = bin2hex(random_bytes(12));

$texto = "Hcode Treinamentos";

var_dump($texto);
var_dump(crypt($texto, bin2hex(random_bytes(12))));

var_dump(crypt("Hcode Treinamentos", $salt));

?>