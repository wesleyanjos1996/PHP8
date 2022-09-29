<?php
$comentario = "Olá <strong>pessoal</strong> da <a href='https://hcode.com.br'>Hcode</a>";
echo strip_tags($comentario, "<strong>");
?>