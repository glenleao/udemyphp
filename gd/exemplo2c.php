<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

// imagestring($image, 5, 450, 150, "certificado", $titleColor); 
imagettftext($image, 32, 0, 450, 150, $titleColor, "fonts". DIRECTORY_SEPARATOR. "Bevan". DIRECTORY_SEPARATOR. "Bevan-Regular.ttf", "CERTIFICADO"); 
imagestring($image, 5, 440, 350, "Glen Leão", $titleColor); 
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor); 

header("Content-type: image/jpeg");

imagejpeg($image);
imagedestroy($image);