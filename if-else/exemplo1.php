<?php
$qualsuaIdade = 124;
$idadeCrianca  = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualsuaIdade < $idadeCrianca) {
	# code...
	echo "Criança";
} else if ($qualsuaIdade < $idadeMaior) {
	echo "adolescente";
} elseif ($qualsuaIdade < $idadeMelhor) {
	echo "Adulto";
} else{
	echo "idoso";
}
 echo "<br>";
 echo ($qualsuaIdade );
?>