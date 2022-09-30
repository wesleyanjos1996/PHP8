<?php

session_start();

echo match(session_status())
{
    PHP_SESSION_DISABLED => "Desabilitado",
    PHP_SESSION_NONE => "Nenhuma",
    PHP_SESSION_ACTIVE => "Ativa"
}

?>