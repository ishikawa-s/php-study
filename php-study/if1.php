<?php
header('Content-type:text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$rateRt = 50;
	echo '降水確率は、', $rateRt, '%です。<br>';

	if ($rateRt >= 40){
		echo '傘を持っていきましょう。';
	}else{
		echo '傘はもっていかなくていいでしょう。';
	}
?>
</body>
</html>