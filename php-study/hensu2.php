<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$var=3;
	echo "[整数型]", $var, "<br>", PHP_EOL;
	$var=23.456;
	echo "[浮動小数点型]", $var, "<br>", PHP_EOL;
	$var='あいうえお';
	echo "[文字列型]", $var, "<br>", PHP_EOL;
	?>
</body>
</html>