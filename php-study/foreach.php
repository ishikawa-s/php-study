<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$days = array(
			'morning' => '朝',
			'afternoon' => '昼',
			'evening' => '夜'
			);

	foreach ($days as $key => $value){
		echo 'good ', $key, '!! ', $value, 'になりました。<br>';
	}
?>
</body>
</html>