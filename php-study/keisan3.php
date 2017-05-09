<?php
header('Content-Type:text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$hensu = 3;
	echo '変数の値は', $hensu, 'です。<br><br>', PHP_EOL;

	echo 'インクリメント<br>', PHP_EOL;
	$hensu++;
	echo $hensu, 'になりました。<br><br>', PHP_EOL;

	echo 'デクリメント<br>', PHP_EOL;
	$hensu--;
	echo $hensu, 'になりました。<br><br>', PHP_EOL;
?>
</body>
</html>