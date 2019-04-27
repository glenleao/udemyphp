<?php
//seçao 3, aula 16 (escopo de variavel)
$nome = "Glen";

function teste(){
	global $nome;
	echo $nome;
}
function teste2(){
	$nome = "glen";
	echo $nome . "agora no teste2";
}

teste();

teste2();


?>