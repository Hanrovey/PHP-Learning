<?php

/*笔记
无限极分类，地区
*/



/* 例子1
// 每个单元之间的地位是平等的
// 因此不存在上级/下级

$area = array(
array('id'=>1,'name'=>'福建'),
array('id'=>2,'name'=>'莆田'),
array('id'=>3,'name'=>'秀屿区'),
array('id'=>4,'name'=>'上海'),
array('id'=>5,'name'=>'北京'),
array('id'=>6,'name'=>'浦东新区'),
array('id'=>7,'name'=>'闵行区'),
array('id'=>8,'name'=>'静安区'),
array('id'=>9,'name'=>'共和新路街道'),
array('id'=>10,'name'=>'海淀区')
);

print_r($area);
*/



/*例子2
// 完善上面例子
// 我们为了表示地区之间的上下级关系，人为的加了一个字段
// parent
// parent的值 是 该栏目的父栏目的id
// 找A栏目的子栏目时： 谁的parent值等于A的id值，谁就是A的儿子
$area = array(
array('id'=>1,'name'=>'福建','parent'=>0),
array('id'=>2,'name'=>'莆田','parent'=>1),
array('id'=>3,'name'=>'秀屿区','parent'=>2),
array('id'=>4,'name'=>'上海','parent'=>0),
array('id'=>5,'name'=>'北京','parent'=>0),
array('id'=>6,'name'=>'浦东新区','parent'=>4),
array('id'=>7,'name'=>'闵行区','parent'=>4),
array('id'=>8,'name'=>'静安区','parent'=>4),
array('id'=>9,'name'=>'共和新路街道','parent'=>8),
array('id'=>10,'name'=>'海淀区','parent'=>5)
);

顺着上面数据关系，我们可以分析出
0
	福建
		莆田
			秀屿区

	上海
		浦东新区
		闵行区
		静安区
			共和新路街道

	北京
		海淀区
*/



/*例子3
无限极分类，牵扯2个应用
1、我指定栏目的子孙栏目，即子孙树
2、我指定的栏目的父栏目/父父栏目......顶级栏目，即家谱树
*/

$area = array(
array('id'=>1,'name'=>'福建','parent'=>0),
array('id'=>2,'name'=>'莆田','parent'=>1),
array('id'=>3,'name'=>'秀屿区','parent'=>2),
array('id'=>4,'name'=>'上海','parent'=>0),
array('id'=>5,'name'=>'北京','parent'=>0),
array('id'=>6,'name'=>'浦东新区','parent'=>4),
array('id'=>7,'name'=>'闵行区','parent'=>4),
array('id'=>8,'name'=>'静安区','parent'=>4),
array('id'=>9,'name'=>'共和新路街道','parent'=>8),
array('id'=>10,'name'=>'海淀区','parent'=>5)
);


//找子栏目
function findsons($arr,$id=0) {
	// $id栏目的儿子有哪些呢？
	// 答：数组循环一遍，谁的parent值 等于 id值，谁就是他的儿子

	$sons = array();// 子栏目父数组

	foreach ($arr as $key => $value) {
		if ($value['parent'] == $id) {
			$sons[] = $value;
		}
	}

	return $sons;
}

// print_r(findsons($area,4));

/*
// 找子孙树 方法一 用全局static变量
function subtree($arr,$id=0,$level=1){

	static $subs = array();// 子孙数组

	foreach ($arr as $key => $value) {
		if ($value['parent'] == $id) {

			$value['level'] = $level;

			$subs[] = $value; // 举例说找到array('id'=>1,'name'=>'福建','parent'=>0).

			subtree($arr,$value['id'],$level+1);
		}
	}

	return $subs;
}
*/

// 找子孙树 方法二 用array_merge
function subtree($arr,$id=0,$level=1){

	$subs = array();// 子孙数组

	foreach ($arr as $key => $value) {
		if ($value['parent'] == $id) {

			$value['level'] = $level;

			$subs[] = $value; // 举例说找到array('id'=>1,'name'=>'福建','parent'=>0).

			$subs = array_merge($subs,subtree($arr,$value['id'],$level+1));
		}
	}

	return $subs;
}



// print_r(subtree($area,0,1));

$tree = subtree($area,0,1);
foreach ($tree as $key => $value) {
	echo str_repeat('&nbsp;&nbsp;',$value['level']) . $value['name'] . '<br />';
}








































