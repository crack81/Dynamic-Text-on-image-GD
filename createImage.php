<?php

//default value
$fontsize = 20;
$text = "";

if(isset($_GET['fontsize'])){
    $fontsize = $_GET['fontsize']; 
}

if(isset($_GET['text'])){
    $text = $_GET['text'];
}

putenv('GDFONTPATH=' . realpath('.'));
//Set the Content Type
//header('Content-type: image/jpeg');

// Create Image From Existing File
$jpg_image = imagecreatefromjpeg('img/sunset.jpg');

// Allocate A Color For The Text
$white = imagecolorallocate($jpg_image, 255, 255, 255);

// Set Path to Font File
$font_path = 'fonts/OpenSans-Italic.ttf';

// Print Text On Image
imagettftext($jpg_image, $fontsize, 0, 30, 50, $white, $font_path, $text);


// Send Image to Browser
imagejpeg($jpg_image);

// Clear Memory
imagedestroy($jpg_image);
?> 