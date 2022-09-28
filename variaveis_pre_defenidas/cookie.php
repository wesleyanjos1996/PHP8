<?php

//session_start();

//var_dump($_SESSION["empresa"]);

/*
$f = new ReflectionFunction("setcookie");
var_dump($f->getParameters());
exit;
*/

setcookie(
    name: "PHPSESSID",
    value: "Hcode",
    expires_or_options: time()+86400
);

var_dump($_COOKIE);