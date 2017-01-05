<?php


/*
创建和删除目录

这个例子中，第一次创建目录成功，第二次失败。
因为 目录已经存在。
*/

/*
$array = array('11','22','33','44');
foreach ($array as $key => $value) {
	$path = './Test/' . $value;

	if (mkdir($path)) {
		echo $path . '创建成功';
	}else{
		echo $path . '创建失败';
	}

	echo '<br />';
}
*/


/*
// 优化上面那个方法，先判断文件或目录是否存在。
$array = array('11','22','33','44');
foreach ($array as $key => $value) {
	$path = './Test/' . $value;

	if (file_exists($path) && is_dir($path)) {
		echo $path . '已经存在 <br />';
	}


	if (mkdir($path)) {
		echo $path . '创建成功';
	}else{
		echo $path . '创建失败';
	}

	echo '<br />';
}
*/


$array = array('11','22','55');
foreach ($array as $key => $value) {
	$path = './Test/' . $value;

	if (file_exists($path) && is_dir($path)) {
		if (rmdir($path)) {
			echo $path . '删除成功 <br />';
		}else{
			echo $path . '删除失败 <br />';
		}
	}else{
		echo $path . '目录不存在 <br />';
	}
}







