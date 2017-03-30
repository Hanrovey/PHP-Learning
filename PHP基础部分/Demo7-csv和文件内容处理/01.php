<?

/*
把excel导入数据库的方法
excel -> csv -> 文件处理
*/

$file = './salary.csv';
$fh = fopen($file, 'rb');


/*
思路一：每次读取一行
每一行的内容用逗号拆成数组


while (!feof($fh)) {
	$row = fgets($fh);
	print_r(explode(',', $row));
}
*/


/*
使用系统方法 fgetcsv()
*/
while (!feof($fh)) {
	$row = fgetcsv($fh);
	print_r($row);
}
