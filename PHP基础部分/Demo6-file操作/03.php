<?php

/*
用文件操作函数，来批量处理客户名单
*/

$file = './students.txt';

/*
第一种方法：简便快捷暴力的方法
file_get_contents获取内容
win : \r\n
*nix: \n
mac : \r

$cont = file_get_contents($file);
// explode()将字符串打散成数组,通用性不好
print_r(explode("\r", $cont));
*/


/*
第二种，打开，一点点的读，每次读一行
fgets(),每次读一行
*/

/*
// 模式里面可以加b，表示以2进制来处理，不受编码的干扰
$fh = fopen($file, 'rb');
echo fgets($fh),'<br />';
echo fgets($fh),'<br />';
echo fgets($fh),'<br />';
*/

/*
文件指针一直在往后移动，
feof,end of file的意思
专门用来判断指针是否已经走到结尾

$fh = fopen($file, 'rh');
while (!feof($fh)) {
	echo fgets($fh),'<br \>';
}
*/



/*
第三种方法，也是比较暴力的方法
file()函数,直接读取文件内容，并按行拆成数组，一次性读入
*/

$arr = file($file);
print_r($arr);












