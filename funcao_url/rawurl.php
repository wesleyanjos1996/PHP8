<?php

$msg = "Wesley Anjos";
$name = "João Rangel";

echo rawurlencode($msg)."<br>";
echo rawurldecode("Wesley%20Anjos")."<br>";

echo rawurlencode($name)."<br>";
echo rawurldecode("Jo%C3%A3o%20Rangel")."<br>";
?>