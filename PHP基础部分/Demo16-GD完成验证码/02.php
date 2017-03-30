<?php

/*
复杂一点的验证码

*/


// 1.造画布
$image = imagecreatetruecolor(50, 25);

//不填充，看默认画布底色（黑色）

// 2.造颜料准备写字
$red = imagecolorallocate($image, 255, 0, 0);
// 浅色背景
$gray = imagecolorallocate($image, 220, 220, 220);
// 随机颜色
$randcolor = imagecolorallocate($image, mt_rand(0,150), mt_rand(0,150), mt_rand(0,150));

// 干扰线颜色
$linecolor1 = imagecolorallocate($image, mt_rand(150,250), mt_rand(150,250), mt_rand(150,250));
$linecolor2 = imagecolorallocate($image, mt_rand(150,250), mt_rand(150,250), mt_rand(150,250));
$linecolor3 = imagecolorallocate($image, mt_rand(150,250), mt_rand(150,250), mt_rand(150,250));

// 填充背景
imagefill($image, 0, 0, $gray);

// 画干扰线
imageline($image, 0, mt_rand(0,25), 50, mt_rand(0,25), $linecolor1);
imageline($image, 0, mt_rand(0,25), 50, mt_rand(0,25), $linecolor2);
imageline($image, 0, mt_rand(0,25), 50, mt_rand(0,25), $linecolor3);

/* 3.写字
imagestring -- 水平地画一行字符串

说明
bool imagestring(image, font, x, y, string, color)
参数分别代表：画布资源，字体大小(1-5中选择)，字符最左上角的x坐标，y坐标，要写的字符串，颜色
*/

$str = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0,4);

imagestring($image, 5, 6, 4, $str, $randcolor);

header('content-type: image/png');
imagepng($image);