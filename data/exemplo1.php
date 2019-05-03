<?php
//parametro pega a data atual, acrescenta novo intervalo a uma nova variável; depois adiciona esse período a variável atual.
$dt = new DateTime();

$periodo = new DateInterval("P15D");
echo $dt -> format("d/m/Y H:i:s");
$dt ->add($periodo);

echo "<br>";
echo $dt -> format("d/m/Y H:i:s");

?>