<?php

/*
迭代查找家谱树(难)
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


function subTree($arr,$parent=0){
	$task = array($parent);// 任务表
	$tree = array();// 地区表

	while (!empty($task)) {
		$falg = false;

		foreach ($arr as $key => $value) {
			
			if ($value['parent'] == $parent) {
				$tree[] = $value;
				array_push($task, $value['id']);// 把最新的地区id压入任务栈
				$parent = $value['id'];
				unset($arr[$key]);// 把找到的单元unset掉

				$falg = true;// 说明找到了子栏目
			}
		}

		if ($falg == false) {
			array_pop($task);
			$parent = end($task);
		}

		print_r($task);
	}

	return $tree;
}


print_r(subTree($area,0));



