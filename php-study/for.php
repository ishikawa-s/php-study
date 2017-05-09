<?php
header('Content-type:text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$num = 10;
	echo $num, '個の●を表示';

	for($cnt=0; $cnt<$num; $cnt++){
		echo '●';
	}
?>
</body>
</html>