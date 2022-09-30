<?php

session_start();

echo session_id()."<br>";

$_SESSION["nome"] = "Wesley Anjos";

echo "session-id: ".$_SESSION["nome"];

?>