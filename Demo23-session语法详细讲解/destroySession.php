<?php

/*
session销毁的4种方法

$_SESSION['key'] = '';// 可销毁某一个键值
$_SESSION = array();// 可销毁所以session变量
Session_unset();// 同上
Session_destory();// 彻底销毁session文件
*/

session_start();


unset($_SESSION['user']);
$_SESSION['school'] = '清华大学';


