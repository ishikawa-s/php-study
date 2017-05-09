<?php
header('Content-Type:text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$num = 3;
	$num += 6;
	echo $num, '<br>';

	$num -=3;
	echo $num, '<br>';

	$num *=7;
	echo $num, '<br>';

	$num /= 6;
	echo $num, '<br>';

	$num %= 3;
	echo $num, '<br>';

	$str = '明太子';
	$str .= 'チーズ';
	$str .= 'もんじゃ';
	echo $str;
?>
</body>
</html>