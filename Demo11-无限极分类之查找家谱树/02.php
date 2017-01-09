<?php


/*
迭代的方式 ： 实现家谱树
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


// 迭代，效率比递归高，代码也少
function tree($arr,$id){

	$tree = array();

	while ($id !== 0) {
		foreach ($arr as $key => $value) {
			if ($value['id'] == id) {
				$tree[] = $value;
				$id = $value['parent'];

				break;
			}
		}
	}
	return $tree;
}


print_r(tree($area,8));