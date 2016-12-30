<?php

/*
题目 ： 
有一堆文件 
a.txt 
b.txt
c.txt
d.txt

帮我检测，文件'<10'字节的，删除掉。
如果文件含有‘sb’这个单词，也把文件删除 
*/

$array = array('a.txt','b.txt','c.txt','d.txt');
foreach ($array as $key => $value) {
	$file = './' . $value;

	// 判断大小
	if (filesize($file) < 10) {
		unlink($file);
		echo $file . '小于10字节就删除 <br />';
		continue;
	}

	// 大于10字节，就判断内容
	$cont = file_get_contents($file);	
	if (stripos($cont, 'sb') != false) {
		unlink($file);
		echo $file . '有敏感词汇 <br />';
	}
}
