<?php

var_dump($_GET);

$fields = [
    "nome"=>"Wesley",
    "sobenome"=>"Anjos"
];

//echo http_build_query($fields);
echo '<a href="?'.http_build_query($fields, "_", " AND ", PHP_QUERY_RFC3986).'">Link</a>'
?>