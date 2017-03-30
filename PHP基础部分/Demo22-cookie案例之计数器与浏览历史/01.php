<?php

/*
	cookie完成计数器
*/

// 用cookie来记录本网站已经访问多少页面
// 如果这个页面是第一次访问，则没有cookie信息

/*
if (!isset($_COOKIE['num'])) {// 第一次来访问，还没有cookie
	setcookie('num',1);
}else{// 已经有访问记录了，次数+1
	setcookie('num',$_COOKIE['num'] + 1);
}

echo "这是你的第" . $_COOKIE['num'] . '访问记录';
*/


if (!isset($_COOKIE['num'])) {// 第一次来访问，还没有cookie
	$num = 1;
	setcookie('num',$num);
}else{// 已经有访问记录了，次数+1
	$num = $_COOKIE['num'] + 1;
	setcookie('num',$num);
}

echo "这是你的第" . $num . '访问记录';
