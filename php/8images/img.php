<?php
header ("content-Type: image/png");

$image = imagecreatetruecolor(800, 800);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagefill($image, 0, 0, $black);

imagestring($image, 5, 20 , 30 , "Hello", $red);
imagepng($image);
imagedestroy($image);
?>