<?php
// conexao pdo
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "DESKTOP-17JK314\Glen", "");

// mostra os dados no banco
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

echo json_encode($results);