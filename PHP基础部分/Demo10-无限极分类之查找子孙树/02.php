<?php

/*
函数就是个封装的执行体，前后执行，没有联系   这是正常逻辑

要是想让$price 不每次初始化，可以使用static 静态变量
*/

function test(){

	static $price = 4;

	$price += 1;

	return $price;
}


echo test(),'<br />';
echo test(),'<br />';
echo test(),'<br />';
echo test(),'<br />';
echo test(),'<br />';



/*
在函数中申明的static 静态变量
无论此函数调用多少次，只初始化一次，

以后就会直接沿用该变量，这在递归时，很有用


static总结：
1、修饰类的属性与方法为静态属性，静态方法
2、static::method(), 延迟绑定
3、在函数/方法中，申明静态变量用
*/