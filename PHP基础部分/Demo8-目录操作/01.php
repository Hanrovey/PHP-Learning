<?php

/*
目录操作
opendir     打开目录
readdir     读取目录
mkdir       创建目录
rmdir       删除目录
closedir    关闭目录句柄
is_dir      判断是否为目录
*/

$path = './Test';



/*
opendir 打开目录，返回资源句柄
*/
$dh = opendir($path);

/*
echo readdir($dh),'<br />';
echo readdir($dh),'<br />';
echo readdir($dh),'<br />';
echo readdir($dh),'<br />';
echo readdir($dh),'<br />';
echo readdir($dh),'<br />';
echo readdir($dh),'<br />';
echo readdir($dh),'<br />';

.
.. 是虚拟目录，分别代表 当前目录 和 上一级目录
*/


// 一次性读取路径
while (($filename = readdir($dh)) !== false) {
	echo $filename;

	if (is_dir('./Test/' . $filename)) {
		echo '是目录 <br />';
	}

	echo '<br />';
}

// 关闭句柄
closedir($dh);


