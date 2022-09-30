<?php

echo filesize("./arq.csv")."<br>";
echo filetype("./arq.csv")."<br>";
echo mime_content_type("./arq.csv");

var_dump(stat("./arq.csv"));

$stat = stat("./arq.csv");

var_dump(date("Y-m-s H:i:s", $stat[8]));
var_dump(date("Y-m-s H:i:s", $stat[9]));
?>