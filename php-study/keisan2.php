<?php
header('Content-type:text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$kekka = 1+5*3;
	echo '1 + 5 * 3 = ', $kekka, '<br>',PHP_EOL;

	$kekka = (1+5)*3;
	echo '(1 + 5) * 3= ', $kekka, '<br>',PHP_EOL;
?>
</body>
</html>