<?php

/*
	cookie完成浏览历史记录
*/

// 当前的url，但是参数是uri
$uri = $_SERVER['REQUEST_URI'];

/* 这么放是错误的，因为setcookie(),第2个参数只能是字符串
// 把url放在cookie里面
setcookie('history',array($uri));
*/

if (!isset($_COOKIE['history'])) {// 第1次
	$his[] = $uri;

}else{// 第n次
	$his = explode('|', $_COOKIE['history']);

	array_unshift($his, $uri); // 追加在数组头
	$his = array_unique($his);// 去重

	// 保留10个
	if (count($his) > 10) {
		array_pop($his);
	}
}

setcookie('history',implode('|', $his));

$id = isset($_GET['id'])?$_GET['id']:0;

?>


<p>
	<a href="02.php?id=<?php echo $id-1; ?>">上一页</a> <br />
</p>

<p>
	<a href="02.php?id=<?php echo $id+1; ?>">下一页</a> <br />
</p>

<ul>
	<li>浏览记录</li>
	<?php foreach($his as $v){ ?>
	<li><?php echo $v;?></li>
	<?php }?>
</ul>