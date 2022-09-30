<?php

session_start();

$_SESSION["empresa"] = "Hcode";

//session_unset();
session_destroy();

echo $_SESSION["empresa"];

?>