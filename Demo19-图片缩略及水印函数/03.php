<?php

/*
透明复制
*/

/*
imagecopymerge(dst_im, src_im, dst_x, dst_y, src_x, src_y, src_w, src_h, pct)

pct : 透明度 (0-100)
*/

// 读取大图
$dst = imagecreatefromjpeg('head.jpg');

// 读取小图
$src = imagecreatefromjpeg('smallHead.jpg');

$srcW = 100;
$srcH = 100;

// 设置图片的混合度
imagealphablending($src, true);

// 透明复制
imagecopymerge($dst, $src, 0, 0, 0, 0, $srcW, $srcH, 50);

// 输出图片
echo imagejpeg($dst,'./mergeHead.jpg') ? 'okay' : 'failed';