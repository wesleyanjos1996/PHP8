<?php

$read = 20;
$endfile = 250;

while($read <= $endfile)
{
    if($read == 80)
    {echo "Saindo do laço<br>"; break;}

    $read += 20;
    echo $read."<br>";
}

echo "Fora do caminho while<br>";

for($x = 1; $x < 11; $x++)
{
    echo "<hr><b>Tabuado do $x</b><br>";

    for($y = 1; $y < 11; $y++)
    {
        if($x * $y > 25)
        {break 2;}
        echo "$x X $y = ".($x*$y)."<br>";
    }
}

?>