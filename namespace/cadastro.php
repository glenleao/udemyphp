<?php

class Cadastro {

	private $nome;
	private $email;
	private $senha;

	public function getNome():string{
		return $this->nome;
	}

	public function getEmail():string{
		return $this->email;
	}

	public function getSenha():string{
		return $this->senha;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setEmail($email){
		$this->Email = $email;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
}