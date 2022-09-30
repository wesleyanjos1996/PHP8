<?php

var_dump(date_parse("2020-11-26 12:00:00.000"));

var_dump(date_parse("2020-11-26 12:00:00.000 -10 day"));

$data = "26/11/2020";

var_dump(date_parse_from_format("d/m/Y", $data));
?>