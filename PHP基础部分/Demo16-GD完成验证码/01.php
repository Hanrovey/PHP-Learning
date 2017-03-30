<?php

/*
验证码

验证码不就是有字母的图片

造图片
写字-》imagestring
*/


// 1.造画布
$image = imagecreatetruecolor(50, 25);

//不填充，看默认画布底色（黑色）

// 2.造颜料准备写字
$red = imagecolorallocate($image, 255, 0, 0);


/* 3.写字
imagestring -- 水平地画一行字符串

说明
bool imagestring(image, font, x, y, string, color)
参数分别代表：画布资源，字体大小(1-5中选择)，字符最左上角的x坐标，y坐标，要写的字符串，颜色
*/

$str = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0,4);

imagestring($image, 5, 0, 0, $str, $red);

header('content-type: image/png');
imagepng($image);