<?php

//echo $_GET["nome"];

//if(isset($_GET["nome"])) echo $_GET["nome"];

echo isset($_GET["nome"])?$_GET["nome"]:"Vaziou";

$get = fn($key) => isset($_GET[$key])?$_GET[$key]:"";

$id = (int)$get("id") + 1;

echo "<a href='?id=$id?'>Próximo</a>";