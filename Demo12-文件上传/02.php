<?php

// 接收数据
print_r($_POST);
/*
Array
(
    [username] => aaa
    [submit] => submit
)
*/



// 打印上传文件的信息
print_r($_FILES);

/*
Array
(
    [file] => Array
        (
            [name] => 福.jpg
            [type] => image/jpeg
            [tmp_name] => /Applications/MAMP/tmp/php/phprMRFsM //临时文件路径
            [error] => 0
            [size] => 106591
        )

)
*/

// sleep(10);
// 移动文件
echo '临时文件' . $_FILES['file']['tmp_name'];

$src = $_FILES['file']['tmp_name'];
$des = './src/' . $_FILES['file']['name'];

if(move_uploaded_file($src, $des)){
	echo "success";
}else{
	echo "faileds";
}