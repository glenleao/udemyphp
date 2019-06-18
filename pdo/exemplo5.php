<?php
// conexao pdo
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

// altera os dados no banco
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID");

$login = "joao";
$password = "querty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados OK!";

