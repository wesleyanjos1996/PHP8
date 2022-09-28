<?php

function Exception($exception)
{
    //var_dump($exception);
    echo $exception->getMessage()."<br>";
    echo $exception->getFile()."<br>";
    echo $exception->getLine()."<br>";
    echo $exception->getCode();
}

set_exception_handler("Exception");

throw new Exception("Essa é minha exceção!", 400);

echo "Depois da exceção!";