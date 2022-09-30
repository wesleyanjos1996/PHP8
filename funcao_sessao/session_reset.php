<?php

session_start();

$_SESSION["empresa"] = "Treinamentos";

session_commit();
session_abort();
//session_reset();

echo $_SESSION["empresa"];

?>