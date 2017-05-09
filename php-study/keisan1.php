<?php
header('Content-type:text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$waist = 70;
	$height = 170;
	$rate = $waist / $height;
	echo 'あなたの隠れ肥満度は、', $rate, 'です。', PHP_EOL;
?>
</body>
</html>