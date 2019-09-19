<?php
// conexao pdo (dsn - data search name)
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

// mostra os dados no banco
$stmt = $conn->prepare("SELECT dtcadastro FROM tb_usuarios ORDER BY dtcadastro");

$stmt->execute();
//fetchAll - fatiar todas as linhas
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
//1º foreach - array de linha por linha
foreach ($results as $row) {
	//array dos campos preenchidos das colunas
	foreach ($row as $key => $value) {
		echo "<strong>".$key.":</strong>". $value."<br>";
	}
	echo "----------------------------<br>";
}