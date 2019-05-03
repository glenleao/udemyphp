<?php

$a = 10;
//Sem o & o que acontece no escopo da função só vale dentro da função; & = passagem de parametro por referencia (o que acontece na função, muda o valor da variável)		
function trocavalor(&$a){
	$a +=50;
	return $a;
}
echo trocavalor($a);
echo "<br>";
echo trocavalor($a);
echo "<br>";
echo trocavalor($a);
echo "<br>";
echo $a;
?>