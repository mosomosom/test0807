<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>20210904</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	for($i = 1; $i <= 100; $i++){
		//5と7の両方の倍数の場合、
		if ($i % 35 === 0){
			//FizzBuzzと出力
			echo 'FizzBuzz';

		//7の倍数
		} elseif ($i % 7 === 0) {
			echo 'Fizz';

		} elseif ($i % 5 ===0) {
			echo 'Buzz';
		
		//それ以外
		}else {
			echo $i;
		}

		echo PHP_EOL;

	?>
</body>
</html>