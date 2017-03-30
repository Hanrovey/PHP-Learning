<?php

/*
图片变小
图片带透明效果

函数：
imagecopyresampled
imagecopymergy
*/


/*

imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)

复制图片并允许调整大小()可实现缩略图
*/


$srcW = 200;// 原图宽度
$srcH = 200;// 原图高度

$dstW = (int)$srcW/2;// 缩略图宽度
$dstH = (int)$srcH/2;// 缩略图高度

// 创建缩略图画面
$dst = imagecreatetruecolor($dstW, $dstH);

// 读取原始图
$src = imagecreatefromjpeg('./head.jpg');

// 复制完毕
imagecopyresampled($dst, $src, 0, 0, 0, 0, $dstW, $dstH, $srcW, $srcH);


// 输出
imagejpeg($dst,'./smallHead.jpg');
