<?php


/***
中文验证码

如何产生随机的中文字符串?
中文按其unicode编码,是有规律的,
位于0x4E00-0x9FA0
我们可以在uncode范围内随机选取,

但是 请注意,对于用户来说,能否认得?
因为有大量生僻字.


所以在实际项目中,只是抽取几百或上千个常用汉字,放数组里,随机选取.
***/


$char = array('中','华','人','民','共','和','国');
shuffle($char);
$code = implode('',array_slice($char,0,4));


// 画布
$im = imagecreatetruecolor(65,25);

// 颜料
$gray = imagecolorallocate($im,200,200,200);
$blue = imagecolorallocate($im,0,0,255);


// 填充
imagefill($im,0,0,$gray);

// 写字
imagettftext($im,12,0,2,20,$blue,'./Microsoft Yahei.ttf',$code);


// 输出
header('content-type: image/jpeg;');
imagejpeg($im);

//销毁
imagedestroy($im);






