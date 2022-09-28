<?php

/*
set_error_handler(function($errorNum, $errorStr, $errorFile, $errorLine)
{
    var_dump("Número: $errorNum");
    var_dump("Mensagem: $errorStr");
    var_dump("Arquivo: $errorFile");
    var_dump("Linha: $errorLine");
});
*/

function manipuladorErro($errorNum, $errorStr, $errorFile, $errorLine)
{
    /*
    switch($errorNum)
    {
        case E_USER_ERRROR: ""; break;
        case E_USER_NOTICE: ""; break;
    }*/

    /*
    // PARA USAR NO PHP8 em vez de switch
    match($errorNum)
    {
        E_USER_ERROR=>"",
        E_USER_NOTICE=>""
    };
    */

    var_dump("Número: $errorNum");
    var_dump("Mensagem: $errorStr");
    var_dump("Arquivo: $errorFile");
    var_dump("Linha: $errorLine");
}

set_error_handler("manipuladorErro");