<?php

/*
递归对数组转义
*/


$array = array('a"b',array("c'd",array('e"f')));

// 以为递归转义函数
function _addslashes($arr){

	foreach ($arr as $key => $value) {
		if (is_string($value)) {// 如果字符串中含有 " ，就转义
			$arr[$key] = addslashes($value);
		}elseif (is_array($value)) {// 如果是数组，继续调用自身再转义
			$arr[$key] = _addslashes($value);
		}
	}

	return $arr;
}

print_r(_addslashes($array));// 打印递归转义后的数组

print_r($array);// 这个array里面的值还是原来的

// 如果想要array里面的内容为转义之后的值，可以直接赋值
// $array = _addslashes($array);
