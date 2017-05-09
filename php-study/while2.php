<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$num = 10;
	$cnt = 0;
	echo $num, '個の●を表示';

	do{
		echo '●';
		$cnt++;
	}while($cnt < $num);
?>
</body>
</html>