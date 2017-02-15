<?php

/*
图片复制(水印)
图片半透明提制
图片的按比例复制(缩略)
*/

/*
imagecopy(dst_im, src_im, dst_x, dst_y, src_x, src_y, src_w, src_h)
*/


/*1.图片复制
把一副小图复制到大图上，复制2份，形成证件照的效果

小图：200*200
大图的宽：200*2 + 30 ，高200
*/

$smallW = 200;// 小图的宽
$smallH = 200;// 小图的高

// 创建大图的画面
$big = imagecreatetruecolor($smallW*2 + 30, $smallH);

// 创建颜料
$gray = imagecolorallocate($big, 200,200,200);

// 填充大图
imagefill($big, 0, 0, $gray);

// 画小图
$small = imagecreatefromjpeg('./head.jpg');

// 复制小图
imagecopy($big, $small, 0, 0, 0, 0, $smallW, $smallH);
imagecopy($big, $small, $smallW + 30, 0, 0, 0, $smallW, $smallH);

// 输出
header('content-type: image/jpeg');
imagejpeg($big);

// 销毁
imagedestroy($big);