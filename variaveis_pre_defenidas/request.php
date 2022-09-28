<?php

var_dump($_SERVER["REQUEST_METHOD"]);
var_dump($_REQUEST["nome"]);

?>

<form method="post">
    <input type="text" name="nome" id="nome">
    <input type="submit" value="Enviar">
</form>