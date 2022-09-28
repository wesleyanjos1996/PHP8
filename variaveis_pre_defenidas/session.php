<?php

session_start();

$_SESSION["empresa"] = "Hcode Treinamentos";

echo "Criando um sessão<br>";

echo $_SESSION["empresa"];

?>

<br>

<a href="session_2.php" target="_blank" title="Vá para uma nova sessão">Vejá o resultado</a>