<?php

interface Controle {

	public function abrir($botao1);
	public function fechar($botao2);
	public function teste($botao3);
}

	abstract class Controlador implements Controle{

		public function abrir($botao1){
			echo "Aperte o botao para " . $botao1 . " o portão<br>";
		}
		public function fechar($botao2){
			echo "Aperte o botão para ". $botao2. " o portão<br>";
		}
		public function teste($botao3){
			echo "Aperte o botão para fazer o " . $botao3 . " da bateria";
		}

}
class  Seg extends Controlador{
	public function acesso(){

	}
	}

$aparelho= new Seg();
$aparelho->abrir('abrir');
$aparelho->fechar('fechar');
$aparelho->teste('teste');
