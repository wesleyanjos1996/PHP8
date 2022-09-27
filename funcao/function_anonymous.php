<?php

$empresa = function($site, $tel){return "https://$site<br>Tel: $tel";};

echo $empresa("hcode.com.br", "112149-7360");

function somar($a, $b, $callback){$callback($a, $b);}
somar(2, 3, function($resultado){echo "<br>"; var_dump($resultado);});

$fn = function($resultado) use ($empresa)
{
    echo "<br>";
    echo $empresa("hcode.com.br", "112149-7360");
    echo "<br>";
    var_dump($resultado);
};
somar(2, 3, $fn);

?>