<?php
// Create a blank image
$image = imagecreatetruecolor(200, 200);

// Allocate a color for the rectangle (e.g., red)
$red = imagecolorallocate($image, 255, 0, 0);

// Draw rectangle: (x1, y1, x2, y2)
imagerectangle($image, 50, 50, 150, 150, $red);

// Output the image
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>
