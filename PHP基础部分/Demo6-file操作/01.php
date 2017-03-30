<?php  

// 文件部分 文件的读取

// 要求把a.txt的内容读取出来，赋值给str变量

/* file_get_contents()可以获取一个文件的内容或一个网络资源的内容

file_get_contents()是读取文件/读网络数据比较快捷的一个函数，帮我们封装了打开/关闭等操作

但是要小心，这个函数一次性把文件的内容读取出来，放内存里，因此工作中处理上百M的大文件，谨慎使用
*/

$file = 'a.txt';
$str = file_get_contents($file);
echo $str;

/*
$url = 'http://www.163.com/';
$str = file_get_contents($url);
file_put_contents('162.html', $str);
*/
// 读出来的内容，能否写入另一个文件里面
/*
file_put_contents() 这个函数用来把内容写入文件
也是一个快捷函数，帮我们封装打开写入关闭的细节

注：如果指定的文件不存在，则会自动创建
*/
file_put_contents('./b.txt', $str);


/*
最简单的小偷程序
*/
$url = 'http://www.163.com/';
$html = file_get_contents($url);

if (file_put_contents('sina.html', $html)) {
	echo "抓过来了";
}else{
	echo "抓错了";
}