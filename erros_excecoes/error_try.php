<?php

function Exception($exception)
{
    echo $exception->getMessage()."<br>";
    echo $exception->getFile()."<br>";
    echo $exception->getLine()."<br>";
    echo $exception->getCode()."<br>";
}

set_exception_handler("Exception");

/*
try
{throw new Exception("Essa é minha exceção!", 400);}
catch(Exception $e)
{echo $e->getMessage();}
*/

// No PHP8
/*
try
{throw new Exception("Essa é minha exceção!", 400);}
catch(Exception)
{echo "Temos um problema";}
*/

class SenhaException extends Exception{}

$nome = "wesley";
$senha = "123";

try
{
    if(!$nome)
    {
        throw new Exception("Preencha o seu nome!", 400);
    }
    if(strlen($senha) < 6)
    {throw new SenhaException("Senha é fraca.", 400);}
}
catch(SenhaException $e)
{
    echo "Problema na sua senha: ".$e->getMessage()."<br>";
}
catch(Exception $e)
{
    echo $e->getMessage()."<br>";
}
finally
{
    //var_dump("Final");
}

//var_dump("Final 2");

/*
$showError = fn($error) => throw new Exception($error);
echo $showError("Deu erro! Throw Expression");

echo "Depois da exceção!";
*/