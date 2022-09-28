<pre>
<?php

print_r($_SERVER);
print_r($_SERVER["SERVER_SOFTWARE"]);
echo "<br>";
print_r($_SERVER["DOCUMENT_ROOT"]);
echo "<br>";
//print_r($_SERVER["DOCUMENT_URI"]);
print_r($_SERVER["REQUEST_URI"]);
echo "<br>";
print_r($_SERVER["PHP_SELF"]);
echo "<br>";

?>
</pre>