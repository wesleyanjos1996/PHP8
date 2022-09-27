<?php

//Variável global
$hcode = "Hcode Treinamentos";
echo $hcode."<br>";

//Variável local
function action(){echo $hcode = "https://www.hcode.com.br<br>";}
action();

function show()
{
    global $hcode;
    echo $hcode;// = "https://www.hcode.com.br<br>";
}
show();

?>