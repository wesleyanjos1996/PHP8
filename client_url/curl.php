<?php

$curl = curl_init("http://localhost/api.php");

$response = curl_exec($curl);

curl_close($curl);

var_dump($response);
?>