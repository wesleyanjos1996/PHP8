<?php

//$texto = "now";
//$texto = "+60 day";
//$texto = "+36 month";
$texto = "last sunday";

var_dump(strtotime($texto));

var_dump(date("d/m/Y H:i", strtotime($texto)));

?>