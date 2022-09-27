<?php
$firstName = "Wesley";
$lastName = "Anjos";

$completeName = $firstName . " " . $lastName;

var_dump($completeName);

$txt = "<br>Lorem ipsum dolor sit";
$txt .= "amet consectetur adipisicing";
$txt .= "elit. Nam, hic temporibus possimus<br>";

echo $txt;

$txt2 = <<<HCODE
<pre>
$completeName
\$completeName
Lorem ipsum dolor sit amet consectetur adipisicing elit.
Quam pariatur nihil, id facere vero sunt deleniti explicabo 
praesentium rerum accusamus consequuntur harum aperiam repellendus aliquid quo ipsam, obcaecati incidunt veritatis.
</pre>
HCODE;

echo $txt2;
?>