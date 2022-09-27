<?php

var_dump("inicio");

goto destino;

conteudo:

var_dump("conteúdo");

return;

destino:

var_dump("término");

goto conteudo;

?>