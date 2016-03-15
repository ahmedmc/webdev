<?php

// tells the browser to expect a jpeg image
header("Content-Type: image/jpeg;");

$imageWidth = 800;
$imageHeight = 600;
$border1 = 20;
$border2 = 60;
$border3 = 120;

$image = imageCreateTrueColor($imageWidth, $imageHeight);

$black = imageColorAllocate($image, 0, 0, 0);

$purple = imageColorAllocate($image, 255, 0, 255);

$white = imageColorAllocate($image, 255, 255, 255);

$red = imageColorAllocate($image, 255, 0, 0);

$center_x_coordinate = 400;
$center_y_coordinate = 450;
$ellipse_width = 600;
$ellipse_height = 600;
$arc_start_point_degrees = 200;
$arc_end_point_degrees = 20;
// $color = $red; 

$color = array(0 => imageColorAllocate($image, 255, 255, 255), 20 => imageColorAllocate($image, 255, 0, 255), 40 => imageColorAllocate($image, 255, 0, 0), 60 => imageColorAllocate($image, 255, 0, 255), 80 => imageColorAllocate($image, 255, 255, 255), 100 => imageColorAllocate($image, 255, 0, 0)); 

// $color1 = array(0 => $white, 20 => $purple, 40 => $red, 60 => $purple, 80 => $white, 100 => $red); 
// var_dump($color1);

imageFill($image, 0, 0, $black);

// imagearc($image, $center_x_coordinate, $center_y_coordinate, $ellipse_width, $ellipse_height, $arc_start_point_degrees, $arc_end_point_degrees, $color);

$count=100;
while ($count >=0) {
	imagefilledarc($image, $center_x_coordinate, $center_y_coordinate, $ellipse_width+$count, $ellipse_height+$count, $arc_start_point_degrees, $arc_end_point_degrees, $color[$count], IMG_ARC_NOFILL);

	$count-=20;
}

imagejpeg($image);

imagedestroy($image);
?>