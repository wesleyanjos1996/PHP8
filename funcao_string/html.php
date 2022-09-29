<?php

$html = "<a href='https://hcode.com.br/blog/'>Acesse a Hcode Blog</a>";

var_dump(htmlentities($html, ENT_NOQUOTES));

echo var_dump(htmlentities($html, ENT_NOQUOTES));
echo $html;

$db = "&lt;a href=&quot;https://hcode.com.br/blog&quot;&gt;Acesse a Hcode Blog&lt;/a&gt;";

echo "<br>".html_entity_decode($db);

?>