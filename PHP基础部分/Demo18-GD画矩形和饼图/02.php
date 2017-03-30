<?php

/***
圆弧(统计时的饼状图，要用到)
***/


// 创建画布
$image = imagecreatetruecolor(800, 600);

// 创建颜料
$blue = imagecolorallocate($image,0,0,255);
$gray = imagecolorallocate($image,200,200,200);
$red = imagecolorallocate($image,255,0,0);
$green = imagecolorallocate($image,0,255,0);

//填充
imagefill($image, 0, 0, $gray);


/* 画一段圆弧并填充
bool imagefilledarc(image, cx, cy, width, height, start, end, color, style)

参数分别为：画布，圆心X值，圆心Y值，宽，高，起始角度，结束角度，颜色，填充方式

0 IMG_ARC_PIE		弧线连圆弧2端
1 IMG_ARC_CHORD		直线连圆弧2端
2 IMG_ARC_NOFILL	不填充轮廓(默认是填充的)
4 IMG_ARC_EDGED		指明用直线将起始和结束点与中心点相连接
*/
imagefilledarc($image, 400, 300, 300, 300, -90, 0, $red, 1+2+4);
imagefilledarc($image, 200, 200, 330, 330, 270, 0, $green, 0+4);
imagefilledarc($image, 200, 200, 310, 310, -90, 0, $blue, 0+4);


// 输出或保存
header('content-type: image/jpeg');
imagejpeg($image);


// 销毁
imagedestroy($image);