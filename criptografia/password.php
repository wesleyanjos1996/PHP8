<?php

$senha = "Hc0d3!:🦔";

$hash = password_hash($senha, PASSWORD_DEFAULT);

$bancoDados = '$2y$10$nI4ZOy.rL2csFuCB89etweExnJjq9YmHspNrOXEhFTl43cN3ku9xG';

var_dump(password_verify($senha, $bancoDados));

?>