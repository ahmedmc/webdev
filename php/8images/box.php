<?php

header("Content-Type: image/png");

$imageWidth = 600;
$imageHeight = 600;
$text = "PHP Course";
$font = 2;
$textLength = strlen($text);
$border1 = 20;
$border2 = 60;
$border3 = 120;

$image = imageCreateTrueColor($imageWidth, $imageHeight);

$black = imageColorAllocate($image, 0, 0, 0);

$purple = imageColorAllocate($image, 255, 0, 255);

$white = imageColorAllocate($image, 255, 255, 255);

$red = imageColorAllocate($image, 255, 0, 0);

imageFill($image, 0, 0, $black);

imagefilledrectangle($image, $border1,$border1, $imageWidth-$border1, $imageHeight-$border1, $red);

imagefilledrectangle($image, $border2,$border2, $imageWidth-$border2, $imageHeight-$border2, $purple);

imagefilledrectangle($image, $border3,$border3, $imageWidth-90, $imageHeight-120, $black);

imageString($image, $font, ($imageWidth/2)-$textLength, $imageHeight/2, $text, $white);

imagePNG($image);

imageDestroy($image);
?>