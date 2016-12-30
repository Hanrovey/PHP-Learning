<?php

/*
	文件操作之
	fopen
	fread
	fwrite
	fclose
*/


/*
fopen() 打开一个文件，返回一个句柄资源
fopen($filename,mode);
第二个参数是‘模式’，如只读模式，读写模式等
返回值：资源
*/

$file = './162.html';
$fh = fopen($file,'r');

// 沿着上面返回的$file这个资源通道来读文件
echo fread($fh,10),'<br />';

// 返回 int(0),说明没有成功写入
// 原因：在于第二个mode参数，选的r，即只读打开
var_dump(fwrite($fh, '测试一下，能不能用'));

// 关闭资源
fclose($fh);


/*
r+读写模式，并把指针指向文件头
写入成功
注：从文件头，写入时，覆盖相等字节的字符
*/
$fh = fopen($file, 'r+');
echo fwrite($fh, 'hello') ? 'success': 'fail','<br />';
fclose($fh);


/*
w:写入模式(fread读不了)
并把文件大小截为0
指针停于开头出
*/
echo '<br />';
$fh = fopen('./test.txt', 'w');
fclose($fh);
echo "ok!";

































