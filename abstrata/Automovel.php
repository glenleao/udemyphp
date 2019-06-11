<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade)
	{
		echo "O veículo acelerou até " . $velocidade . " km/h <br>";
	}

	public function frenar($velocidade){
		echo "O veiculo frenou até " . $velocidade . " km/h <br>";
	}

	public function trocarMarcha($marcha){
	echo "O veiculo engatou a marcha " . $marcha . "<br>";
}
}

class Delrey extends Automovel {
	public function empurrar(){

	}
}

$carro= new Delrey();
$carro->acelerar(200);

