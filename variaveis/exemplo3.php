<?php
//seçao 3, aula 14
$nome = "Hcode";
$site = "www.hcode.com";

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

////////////////////////////
//tipos compostos (array e objeto)
$frutas  = array("abacaxi","laranja","abacate" );
// echo $frutas[2];

$nascimento = new DateTime();
// var_dump($nascimento);

///////////////////////
// tipos especiais (resource e null)
$arquivo = fopen("exemplo3.php", "r");
// var_dump($arquivo);
$nulo = null;





?>