<?php

if (rand(1,10) < 4) {
	echo "00000";
}else{
	$content = file_get_contents('./res.txt');
	$content += 1;
	$res = file_put_contents('./res.txt',$content);

	echo "11111";
}



