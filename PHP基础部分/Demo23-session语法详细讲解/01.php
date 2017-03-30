<?php

/*
session的生命周期


一个session，有2个方面的数据共同发挥作用
1：客户端的cookie
2：服务端的session文件

要让session失效，也就是从这2个方面考虑

在php.ini里，如下选项，控制sessionid的cookie的生命周期，秒为单位
session.cookie_lifetime = 15;
注意：如果用户篡改了cookie的生命周期为1年，那你也判断不出来


如果想严格的让session就半个小时有效，可以这样：
$_SESSION['time'] = 登录时的时间戳；

检验session的开启时间
*/


/*
session的有效路径

session的有效，取决于cookie，
cookie在哪儿有效，session自然就能读到

PHP如下选项，指定sessionid这个cookie的有效路径是 '/'路径
自然session无论在多深的目录下设置，而session在整站都有效


*/


/*
cookie只能存储字符串\数字这样的标量数据
而session可以存储数组\对象，除了资源之外的其它7种类型。
*/