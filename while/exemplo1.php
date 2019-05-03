<?php
//teste randomico, onde vai  mostrar o conteudo do BD quando encontrar o que foi pedido
$condicao = true;


while($condicao){
	$numero = rand(1,10);
	if($numero ===3){
		echo "TRÊEEES!!!";
		$condicao = false;
	}
	echo $numero . "";
}

?>