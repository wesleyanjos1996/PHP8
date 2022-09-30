<?php

$email = "hcode@mail.com";

$pessoa = [
    "nome" => "Wesley",
    "idade" => "25",
    "email" => "djalma@mail.com"
];
/*
var_dump(extract($pessoa));

var_dump($nome);
var_dump($email);
var_dump($idade);
*/
/*
var_dump(extract($pessoa, EXTR_SKIP));

var_dump($nome);
var_dump($email);
var_dump($idade);
*/

var_dump(extract($pessoa, EXTR_PREFIX_SAME, "var"));

var_dump($nome);
var_dump($email);
var_dump($var_email);
var_dump($idade);

//var_dump(extract($pessoa, EXTR_PREFIX_ALL, "var"));
?>