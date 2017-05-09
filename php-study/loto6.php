<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	echo "以下の6つの数字を選んだよ<br><br>";

	$numArr = array();

	for ($cnt=0; $cnt<6; $cnt++){
		$num = mt_rand(1, 43);

		for (;;){
			if(in_array($num, $numArr)){
				$num = mt_rand(1, 43);
			}else{
				break;
			}
		}

		$numArr[] = $num;
	}

	sort($numArr);

	foreach ($numArr as $value){
		echo $value, '<br>', PHP_EOL;
	}

?>
</body>
</html>