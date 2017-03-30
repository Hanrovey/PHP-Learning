<?php


/*
	接收文件，并分目录存储，随机生成文件名

	1.根据时间戳，按一定规则生成目录名
	2.获取文件名后缀
	3.判断大小
*/

// 计算并创建目录
function mk_dir(){
	$dir = date('md/i',time());

	if (is_dir('./' . $dir)) {
		return $dir;
	}else{
		mkdir('./' . $dir,0777,true);
		return $dir;
	}
}	

// 获取图片后缀
function getFileExt($file){
	$tmp = explode('.', $file);// 分割单元
	return end($tmp);// 返回最后一个单元
}

// 生成随机文件名
function randName(){
	$str = 'asdfghjklpouytrecvbnmzz098756832';
	return substr(str_shuffle($str),0,6);
}

/*
Array
(
    [file] => Array
        (
            [name] => 福.jpg
            [type] => image/jpeg
            [tmp_name] => /Applications/MAMP/tmp/php/phpJtaVw7
            [error] => 0
            [size] => 106591
        )

)
*/


// 处理多文件上传

// 打印上传文件的信息
print_r($_FILES);

foreach ($_FILES as $key => $value) {

	// 拼接路径
	$path = './' . mk_dir() . '/' . randName() . '.' . getFileExt($value['name']);

	if ($value['error'] != 0) {
		echo $key . '上传失败' . '<br />';
		echo '错误代码' . $value['error'] . '<br />';
		continue;
	}

	// 移动文件
	if (move_uploaded_file($value['tmp_name'], $path)) {
		echo $key . "移动成功";
	}else{
		echo $key . "移动失败";
	}
}

// if ($pic['error'] > 0) {
// 	echo "文件错误";
// 	exit();
// }

// // 拼接路径
// $path = './' . mk_dir() . '/' . randName() . '.' . getFileExt($pic['name']);

// // 移动文件
// if (move_uploaded_file($pic['tmp_name'], $path)) {
// 	echo "移动成功";
// }else{
// 	echo "移动失败";
// }


