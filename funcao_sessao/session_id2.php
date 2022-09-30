<?php

if(!isset($_SESSION[""]))
{header("location: session_id.php");}

echo "Escrevendo na segunda página: ".$_SESSION["nome"];

?>