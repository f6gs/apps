<?php
$video_array = glob("bgvideo/*.{mp4}",GLOB_BRACE);
$video = array_rand($video_array);
$dz = $video_array[$video];
header("Location:".$dz);
?>