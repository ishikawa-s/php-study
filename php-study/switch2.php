<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$str = 'クジラ';
	echo $str, 'です。<br>', PHP_EOL;

	switch ($str){
		case 'イルカ':
		case 'クジラ':
			echo '哺乳類です。';
			break;
		case 'クロマグロ':
		case 'カツオ':
			echo '魚類です。';
			break;
		default:
			echo '何類だろう';
	}
?>
</body>
</html>