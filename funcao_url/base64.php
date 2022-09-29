<?php

$msg = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio rem magnam aperiam? Quaerat in ullam eum quod tenetur nobis quasi eius, molestiae nulla labore debitis perspiciatis dignissimos. Voluptates, veritatis deserunt.";

echo strlen($msg)."<br>";
echo base64_encode($msg)."<br>";
echo strlen(base64_encode($msg))."<br>";

echo base64_decode("TG9yZW0gaXBzdW0gZG9sb3IsIHNpdCBhbWV0IGNvbnNlY3RldHVyIGFkaXBpc2ljaW5nIGVsaXQuIERpc3RpbmN0aW8gcmVtIG1hZ25hbSBhcGVyaWFtPyBRdWFlcmF0IGluIHVsbGFtIGV1bSBxdW9kIHRlbmV0dXIgbm9iaXMgcXVhc2kgZWl1cywgbW9sZXN0aWFlIG51bGxhIGxhYm9yZSBkZWJpdGlzIHBlcnNwaWNpYXRpcyBkaWduaXNzaW1vcy4gVm9sdXB0YXRlcywgdmVyaXRhdGlzIGRlc2VydW50Lg==");
?>