<?php
header ("content-Type: image/jpeg");

$image = imagecreatetruecolor(800, 800);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagefill($image, 0, 0, $black);

imagestring($image, 5, 20 , 30 , "Hello", $red);
//imagearc(($image), cx, cy, width, height, start, end, color)
imagearc(($image), 200, 200, 400, 400, 180, 0, $white);

//imagefilledrectangle(image, x1, y1, x2, y2, color)
imagefilledrectangle($image, 10, 10, 390, 390, $red);

imagepng($image);
imagedestroy($image);
?>