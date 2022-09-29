<?php

$msg = "Hcode Treinamentos, acesse: https://hcode.com.br";

echo strpos($msg, "Hcode")."<br>";
echo strpos($msg, "hcode", 10)."<br>";

echo stripos($msg, "treinamentos")."<br>";
echo stripos($msg, "Treinamentos")."<br>";
echo stripos($msg, "Trenamentos")."<br>";