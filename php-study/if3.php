<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$ninzu = 12;
	$yosan = 5000;

	echo '人数は、', $ninzu, '人です。<br>';
	echo '予算は、', $yosan, '円です。<br>';

	if ($ninzu>=4 && $ninzu<=17 && $yosan>=3500) {
		echo 'グループメニューの注文';
	}else{
		echo 'グループメニュー注文不可';
	}

?>
</body>
</html>