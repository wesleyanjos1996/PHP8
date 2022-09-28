<?php

$GLOBALS["name"] = "Wesley";

function qualquerCoisa(){$GLOBALS["year"] = 2022;}
qualquerCoisa();

function chamaGlobal()
{
    global $idade;
    $idade = 25;
}

chamaGlobal();

var_dump($GLOBALS);
var_dump($GLOBALS["idade"]);