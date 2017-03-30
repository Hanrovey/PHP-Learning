<?php

/*
	GD画图5步详解
*/


/*
1 创建画布
可以用imagecreatetruecolor来创建空白画布
也可以直接打开一幅图片来创建画布（自然，所做的修改在图片基础上进行）

imagecreatefromjpeg()
imagecreatefromgif()
imagecreatefrompng()
*/

$file = './01.png';
$image = imagecreatefrompng($file);
// print_r($image);



/*
2 配颜料
*/
$red = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0, 255, 0);

/* 画一条线 
bool imageline(image, x1, y1, x2, y2, color)
参数分别代表： 画布资源，1端点的x值，1端点的y值，2端点的x值，2端点的y值，线段的颜色
*/

// 从左上角到右下角，画一条红线
imageline($image, 0, 0, 300, 200, $red);

// 从左下角到右上角，画一条蓝线
imageline($image, 0, 200, 300, 0, $green);


/*
3 保存图片，也有讲究
imagepng()
imagejpeg()
imagegif()保存成不同类型的图片

也可以把图片内容不保存，直接输出
*/


// imagepng($image,'./02.png');

// 下面，直接输出图片
// 不用第二个参数，即可直接输出
// 在验证码里，这个功能必用

header('Content-type: image/png');// http图片解析类型
imagepng($image);


/*
销毁
*/
imagedestroy($image);









