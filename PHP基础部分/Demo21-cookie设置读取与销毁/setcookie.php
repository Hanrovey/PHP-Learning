<?php


/*
	设置cookie
setcookie()方法详细学习
setcookie()可以用2个参数，3个参数，4个参数，5个参数来设置

*/

/*
2个参数设置cookie
cookie随着浏览器的关闭，就失效了
*/
setcookie('name',29);


/*
3个参数设置cookie,第三个参数指的是cookie的生命周期，以时间戳为单位
*/
setcookie('class','02班',time()+3600);


/*
cookie的作用域
一个页面设置的cookie，
默认再其统计目录下，及子目录下可以读取

如果想让cookie整站有效，可以在根目录下setcookie

也可以用第4个参数，来指定cookie生效路径
*/
setcookie('gloable','any where!',time()+3600,'/');


/*
cookie是不能跨域名（否则安全问题就太粗了！！！！）
比如sina.com的cookie，不能被baidu.com使用

但是，可以在一个域名的子域名下使用

需要用第5个参数，来表示

例：setcookie('key','value',time()+3600,'/','.baidu.com');
这个cookie在baike.baidu.com可以用
也可以在news.baidu.com上使用
*/


/* 总结4个参数
1:cookie名
2：cookie值
3：有效期，时间戳
4：有效路径
*/


echo "cookie set okay!";