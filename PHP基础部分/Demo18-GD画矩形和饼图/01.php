<?php

/***
画复杂图形，并填充

矩形
椭圆
圆弧(统计时的饼状图，要用到)
***/


// 创建画布
$image = imagecreatetruecolor(800, 600);

// 创建颜料
$blue = imagecolorallocate($image,0,0,255);
$gray = imagecolorallocate($image,200,200,200);
$red = imagecolorallocate($image,255,0,0);

// 填充
imagefill($image, 0, 0, $gray);

// 画矩形没填充
imagerectangle($image, 200, 150, 600, 450, $red);
// imagefilledrectangle($image, 200, 150, 600, 450, $red);//填充的

// 画椭圆
imageellipse($image, 400, 300, 400, 300, $blue);
imageellipse($image, 400, 300, 300, 300, $red);
imageellipse($image, 400, 300, 200, 300, $blue);
imageellipse($image, 400, 300, 100, 300, $red);

// 输出或保存
header('content-type: image/jpeg');
imagejpeg($image);


// 销毁
imagedestroy($image);



