<?php
header('Content-type:text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$str='キリン';
	echo $str, 'です。<br>', PHP_EOL;

	switch ($str){
		case '犬':
			echo 'ワンと鳴きます。';
			break;
		case '猫';
			echo 'ニャーと鳴きます。';
			break;
		case '牛';
			echo 'モーと鳴きます。';
			break;
		default:
			echo 'どのように鳴くのだろう？';

	}
?>
</body>
</html>
