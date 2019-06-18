<?php
//Protegido = na mesma classe e extendida; objeto não vê
//Privado = só na mesma classe;
//Público nas tres

class Pessoa {
	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "abc123";

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}
class Programador extends Pessoa{

	public function verDados(){
		// mostra a classe que está buscando os dados
		echo get_class($this) . "<br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
}
}
$objeto = new Programador();

// echo $objeto->idade ."<br>";

$objeto->verDados();
