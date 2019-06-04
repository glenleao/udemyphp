<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo{

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

$carro = new Civic();
$carro->trocarMarcha(5);
$carro->acelerar(80);
$carro->frenar(20);