<?php

setlocale(LC_TIME, "pt_BR", "portuguese");

//$data = "%A, %d de %B de %Y";
$data = "Hoje é %a, %d de %B de %Y";

var_dump(ucwords(strftime($data, strtotime("today"))));

?>