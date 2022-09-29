<?php

$msg = "Wesley dos Anjos";

var_dump(str_starts_with($msg, "Wesley"));
var_dump(str_starts_with($msg, "Pedro"));
var_dump(str_starts_with($msg, "wesley"));

echo "<hr>";

var_dump(str_ends_with($msg, "Wesley"));
var_dump(str_ends_with($msg, "jos"));
var_dump(str_ends_with($msg, "anjos"));
var_dump(str_ends_with($msg, "Anjos"));

?>