<?php

$content = file_get_contents('./res.txt');
$content += 1;
echo file_put_contents('./res.txt',$content);


// 利用HTTP协议的204特性
// header('HTTP/1.1 204 No Content');