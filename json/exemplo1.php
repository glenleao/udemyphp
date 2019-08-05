<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Glen',
	'idade'=>46
));

array_push($pessoas,array(
	'nome'=>'Maria',
	'idade'=>12
));

echo json_encode($pessoas);