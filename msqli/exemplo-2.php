<?php
// conexao com banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error) {

	echo "Error: " . $conn->connect_error;

}
// consulta ao banco
$result = $conn->query("SELECT * FROM tb_usuarios order by deslogin");
$data = array();
while($row = $result->fetch_assoc()){
	array_push($data, $row);
}

echo json_encode($data);

