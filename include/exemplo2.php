<?php
//require exige que o arquivo exista e que ele esteja correto; include tenta funcionar mesmo que o arquivo não exista ou que tenha erro. Para evitar o laço (chamar um arquivo repetido) usa-se o _once

require_once "inc/exemplo1.php";
require_once "inc/exemplo1.php";

$resultado = somar(10, 20);

echo $resultado;

?>