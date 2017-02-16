<?php

/*
获取图片的大小和类型

getimagesize()
*/

$arr = getimagesize('./head.jpg');
// print_r($arr);
echo "你是" . image_type_to_mime_type($arr[2]) . '类型的图片';


$arr = getimagesize('./women.png');
// print_r($arr);
echo "你是" . image_type_to_mime_type($arr[2]) . '类型的图片';


/*
Array
(
    [0] => 200	宽
    [1] => 200	高
    [2] => 2	图片类型
    [3] => width="200" height="200"
    [bits] => 8
    [channels] => 3
    [mime] => image/jpeg
)
Array
(
    [0] => 336
    [1] => 197
    [2] => 3
    [3] => width="336" height="197"
    [bits] => 8
    [mime] => image/png
)

*/