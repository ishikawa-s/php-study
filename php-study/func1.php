<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	function kakeNum($dat1, $dat2){
		$y = $dat1 * $dat2;
		return($y);
	}

	$ans = kakeNum(3, 7);
	echo '結果は ', $ans, ' です。';
?>
</body>
</html>