<?php
$c = 0;
while($c < 11)
{echo "$c "; $c++;}

echo "<br>";

$time = (int)date("s") % 2 === 0;
var_dump($time);

echo "<br>";

$x = 0;

while((int)date("s") % 2 === 0)
{$x++;}

var_dump($x);
?>