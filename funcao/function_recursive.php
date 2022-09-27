<?php

function recursive($a)
{
    if($a < 200)
    {
        echo $a." ";
        recursive(++$a);
    }
}

recursive(0);

?>