<?php
header('Content-type: text/html; charset="UTF-8');
?>

<html>
<body>
<?php
	$f1 = $_POST['food'][0];
	$f2 = $_POST['food'][1];
	$f1 = htmlspecialchars($f1, ENT_QUOTES, 'UTF-8');
	$f2 = htmlspecialchars($f2, ENT_QUOTES, 'UTF-8');

	echo 'あなたは「', $f1, '」が好きなんですね。<br>', PHP_EOL;
	echo '「', $f2, '」も好きなんですね。<br>', PHP_EOL;
	?>
</body>
</html>