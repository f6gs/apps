<?php
$img_array = glob('bgimg/*.{gif,jpg,png,jpeg,webp,bmp}', GLOB_BRACE);
$img = array_rand($img_array);
$dz = $img_array[$img];
header("Location:".$dz);
?>