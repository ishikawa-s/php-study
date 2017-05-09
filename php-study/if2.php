<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$rateRt = 80;
	echo '降水確率は', $rateRt, '%です。<br>';

	if ($rateRt >= 70) {
		echo 'long umbrella !!';
	}else if($rateRt >= 40){
		echo 'short umbrella !!';
	}else{
		echo 'nothing !!';
	}
?>
</body>
</html>
