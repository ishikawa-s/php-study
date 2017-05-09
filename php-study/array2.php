<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
<body>
<?php
	$bstone = array('ガーネット', 'アメジスト', 'アクアマリン', 'ダイヤモンド',
					 'エメラルド', 'パール', 'ルビー', 'ペリドット', 'サファイア',
					 'オパール', 'トパーズ', 'ターコイズ');

	$birth = 6;
	echo '私は',$birth, '月生まれです。<br>';
	echo '誕生石は', $bstone[$birth - 1], 'です。';
?>
</body>
</html>