<?php
// conexao pdo
class Sql extends PDO {
	private $conn;
	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}

	public function  query($rowQuery, $params = array()){
		foreach ($params as $key =>$value)
	}
	}
}

