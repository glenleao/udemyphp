<?php
//novo recurso php7

function soma(int ...$valores){
	return array_sum($valores);
}
echo soma(2,2);
echo "<br>";
echo soma(25,32);
echo "<br>";
echo soma(2.5,2.1);
echo "<br>";
?>