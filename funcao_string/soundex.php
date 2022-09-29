<?php

$original = "Cátia";

$search = "Kátia";

var_dump(soundex($original) == soundex($search));

var_dump(metaphone($original) == metaphone($search));

?>