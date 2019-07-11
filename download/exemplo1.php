<?php

$link = "http://media.firabcn.es/content/S002014/images/contingut/home/slider/slide_5.jpg";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);
fclose($file);
?>

<img src="<?=$basename?>">