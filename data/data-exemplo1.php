<?php
//tutorial canal webdesignemfoco - trabalhando co datas no php: https://www.youtube.com/watch?v=T7IAriI1zoY&t=102s
date_default_timezone_set("America/Sao_Paulo");
// echo "data atual: ". date('Y-m-d H:i:s') . "<br>";
echo "data atual: " . date('d/m/Y')."<br>";
$date = strtotime(date('Y-m-d'));
$otherDate = strtotime('2019-09-16');
// echo $date . "<br>";
// echo date ('Y-m-d H:i:s', $date);
if($date > $otherDate) {
	echo "A data ". date("d/m/Y", $date)." é maior <br>";
	echo date ("d/m/Y", $otherDate);
} else {
	echo "A data atual é menor!";
}

//Orientação a objetos
// $date = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
// $otherDate = new DateTime("2019-09-16", new DateTimeZone("America/Sao_Paulo"));

// var_dump($date);
// var_dump($otherDate);

//Diff
$dateDiff=$now->diff($otherDate);
var_dump($dateDiff);
