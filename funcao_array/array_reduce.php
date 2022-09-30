<?php

$notas = [200, 100, 50, 50, 5, 5, 5, 5, 2];

$total = array_reduce($notas, function($a, $b){
    var_dump($a, $b);
    var_dump("================");

    return $a - $b;
}, 1000);

var_dump($total);
?>