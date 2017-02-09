<?php

/*
GD库画图的典型流程 

1、创建画布
2、创建各种颜料
3、绘图（如写字、画线、画矩形等形状）
4、保存成图片
5、清理战场，销毁画布
*/


// 1、造画布(多宽、多高) imagecreatetruecolor() 返回资源类型(句柄)
$width = 300;
$height = 200;
$im = imagecreatetruecolor($width, $height);

print_r($im);


// 2、创建颜料 imagecolorallocate
// imagecolorallocate(画布资源,红,绿,蓝)
$blue = imagecolorallocate($im, 0, 0, 255);


/* 3、画图
先用简单的，泼墨渲染 imagefill
imagefill是用颜料填充画布
bool imagefill(画布资源 , 填充的起始点x值, 填充画布的起始点y值, 填充颜色)
*/
imagefill($im, 0, 0, $blue);


/* 4、保存
imagepng
imagejpeg
imagegif
...
来保存成不同图片格式
*/
if(imagepng($im,'./01.png')){
	echo "图片生成成功";
}else{
	echo "fail";
}


/* 5、销毁画布
画布很耗资源，注意释放！
*/
imagedestroy($im);
