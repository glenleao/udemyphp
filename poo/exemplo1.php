<?php

class Pessoa {
	public $nome; //Atributo
	public function falar(){//Método
		return "O meu nome é ".$this->nome;
	}
}

$glen=new Pessoa();
$glen->nome = "glen Leão";
echo $glen->falar();
?>