<?php


/*
session详细语法学习

session的创建、修改、销毁

1：无论是创建、修改、还是销毁sessio，都需要先session_start();
2:一旦session_start之后，$session就可以自由的添加，删除，修改
即：当成普通数组一样操作
*/

session_start();
$_SESSION['user'] = 'Kobe';
$_SESSION['age'] = 20;

$_SESSION['array'] = array('1','2','3');


class Student{
	public $name = 'hello world';
}

$student = new Student();
$_SESSION['student'] = $student;

echo "okay";