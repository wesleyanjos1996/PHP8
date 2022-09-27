<?php

//$res = `dir`;
$res = `ping -n 3 hcode.com.br`;

//Inicio do ajuste de caracteres
$oem = sapi_windows_cp_get("oem");
$res = sapi_windows_cp_conv($oem, 65001, $res);
//Fim do ajuste de caracteres

echo "<pre>$res</pre>";