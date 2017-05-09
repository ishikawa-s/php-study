<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$cnt = 0;
	while (1){
		$cnt++;

		if ($cnt>10){
			echo '10になりました。ループを抜けます。<br>', PHP_EOL;
			break;
		}

		echo '[', $cnt, ']';

		if ($cnt%3){
			echo 'スキップします。<br>', PHP_EOL;
			continue;
		}

		echo '3の倍数です。<br>', PHP_EOL;
	}
	echo '終了';
?>
</body>
</html>