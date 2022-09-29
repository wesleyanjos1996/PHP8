<?php

$nome = "Wesley Anjos";
$email = "wesley@mail.com";
$idade = 25;

echo str_pad($nome, 30, ".");
echo "<br>";
echo str_pad($nome, 30, ".", STR_PAD_LEFT);
echo "<br>";
echo str_pad($email, 30, ".", STR_PAD_BOTH);
echo "<br>";
echo str_pad($idade, 30, ".", STR_PAD_BOTH);

?>