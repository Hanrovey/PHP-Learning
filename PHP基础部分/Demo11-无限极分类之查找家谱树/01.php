<?php


/*
递归的方式 ： 实现家谱树
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


/*
人肉共和新路街道的家谱树

共和新路[parent = 8]
静安区[id==8,parent==4]
上海[id=4,parent==0]

parent==0，到头了.....

思路：只要parent!=0,就继续找
*/
/*
function familyTree($arr,$id){
	$tree = array();

	foreach ($arr as $key => $value) {
		if ($value['id'] == $id) {
			$tree[] = $value;// 找到共和新路为例子


			// 判断要不要找父栏目
			if ($value['parent'] > 0) {// parent > 0,说明有父栏目

				$tree = array_merge($tree,familyTree($arr,$value['parent']));
			}
		}
	}

	return $tree;
}


print_r(familyTree($area,9));// 共和新路街道->静安区->上海
*/


function familyTree($arr,$id){
	$tree = array();

	foreach ($arr as $key => $value) {

		if ($value['id'] == $id) {

			// 判断要不要找父栏目
			if ($value['parent'] > 0) {// parent > 0,说明有父栏目
				$tree = array_merge($tree,familyTree($arr,$value['parent']));
			}

			$tree[] = $value;// 找到共和新路为例子
		}
	}

	return $tree;
}


print_r(familyTree($area,9));// 上海->静安区->共和新路街道












