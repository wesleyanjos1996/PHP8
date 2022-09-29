<?php

$string = "https://hcodelab.com.br/blog";

$start = strpos($string, "://") + strlen("://");

$dominio = substr($string, $start, strlen($string));

echo $dominio."<br>";

echo substr($dominio, 0, strpos($dominio, "/"));

function getDomain($url)
{
    $start = strpos($url, "://") + strlen("://");
    $dominio = substr($url, $start, strlen($url));
    return "<br>".substr($dominio, 0, strpos($dominio, "/"))."<br>";
}

echo getDomain("https://hcodelab.com.br/blog");

?>