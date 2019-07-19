<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 256, 60, 0);
$red = imagecolorallocate($image, 255, 0, 10);

imagestring($image, 5, 120, 220, "Curso PHP", $red);

imagepng($image);

imagedestroy($image);

