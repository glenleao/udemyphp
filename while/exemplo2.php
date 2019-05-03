<?php
// sempre colocar um contador para nao cair no loop infinito (ex: >100)
$total = 150;
$desconto = 0.9;

do{
	$total *= $desconto;
}while ($total > 100); 
	echo $total;

?>