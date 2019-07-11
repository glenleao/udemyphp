<?php
// conexao com banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
	exit;
}
// inserindo valores ao banco
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
// "ss" quer dizer que os valores inseridos sao duas strings
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

