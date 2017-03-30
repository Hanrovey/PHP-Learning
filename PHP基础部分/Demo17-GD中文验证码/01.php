<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
图片里写中文,并做中文验证码

array imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )

***/


// 创建画布
$im = imagecreatefromjpeg('./home.jpg');

// 创建颜料
$blue = imagecolorallocate($im,0,0,255);

// 写字,字体一定要用系统库里面的
imagettftext($im,25,30,327,157,$blue,'./Microsoft Yahei.ttf','hello world');


// 输出或保存
header('content-type: image/jpeg');
imagejpeg($im);


// 销毁
imagedestroy($im);



