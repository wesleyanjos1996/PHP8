<?php
setcookie(
    name: "PHPSESSID",
    value: "Curso PHP 8 - Orientação a Onjetos",
    expires_or_options: time()+86400
);

echo $_COOKIE["PHPSESSID"];
echo isset($_COOKIE["PHPSESSID"])?"Ganhe 5% de desconto para comprar:":"Cookie não existe";
?>