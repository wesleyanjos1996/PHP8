<?php

$msg = "Wesley Anjos+";
$name = "João Rangel";

echo urlencode($name)."<br>";
echo urldecode("Jo%C3%A3o+Rangel")."<br>";

echo urlencode($msg)."<br>";
echo urldecode("Wesley+Anjos%2B")."<br>";
?>