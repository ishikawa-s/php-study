<?php header('Contenttype:text/html; charset=UTF-8'); ?>

<html>
<body>
	<form method='post' action="todo1.php">
		<input type="text" name="todocont" size="30" maxlength="100">
	<?php
	$prioDisp = 2;
	$selStr = array('', '', '');
	$prio = 0;
	if(isset($_POST['priority'])){ //優先度が入っていれば
		$prio = (int)$_POST['priority'];
	}

	if (isset($_POST['search'])){ //検索ボタンが押されたら
		if ($prio == 0 || $prio == 1){
			$prioDisp = $prio;
		}
	}
	$selStr[$prioDisp] = 'selected;'
	?>
		<select name='priority'>
		<option value="2" <?php echo $selStr[2]; ?>>すべて
		<option value="1" <?php echo $selStr[1]; ?>>高
		<option value="0" <?php echo $selStr[0]; ?>>低
		</select>
		<br><br>
		<input type="submit" name="insert" value="追加">
		<input type="submit" name="search" value="検索">
		<input type="submit" name="delete" value="削除">
	<pre>
<?php
		$dsn = 'mysql:dbname=php_test;host=localhost;charset=utf8mb4';
		$user = 'ishikawa_s';
		$password = 'ishikawa_s';
		try{
			$dbh = new PDO($dsn, $user, $password);
		}catch (PDOException $e){
			die('Connect error: '. $e->getMessage());
		}

		$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

		if(isset($_POST['insert'], $_POST['todocont']) && $_POST['todocont']!=''){
			if($prio < 0 || $prio > 1){
				$prio = 0;
			}
			$sql = 'INSERT INTO todolist (todo, prio, created) VALUES (?, ?, CURDATE())';
			$sth = $dbh->prepare($sql);
			$sth->bindValue(1, $_POST['todocont'], PDO::PARAM_STR); //プレースホルダー1番にstring型で代入
			$sth->bindValue(2, $prio, PDO::PARAM_INT);	//プレースホルダー2番にint型で代入
			$sth->execute();
		}elseif (isset($_POST['delete'], $_POST['chktodo'])){
			$sql = 'DELETE FROM todolist WHERE id = ?';
			$sth = $dbh->prepare($sql);
			foreach ($_POST['chktodo'] as $chk){
				$id = (int)$chk;
				$sth->bindValue(1, $id, PDO::PARAM_INT);
				$sth->execute();
			}
		}

		if ($prioDisp == 2){
		$sql = 'SELECT id, todo FROM todolist';
		$sth = $dbh->prepare($sql);
		}else{
			$sql = 'SELECT id, todo FROM todolist WHERE prio = ?';
			$sth = $dbh->prepare($sql);
			$sth->bindValue(1, $prioDisp,PDO::PARAM_INT);
		}
		$sth->execute();
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)){ //selectで取得した配列を順番に呼び出す
			echo '<input type="checkbox" name="chktodo[]" value="';
			echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'); //特殊文字の変換
			echo '">';
			echo htmlspecialchars($row['todo'], ENT_QUOTES, 'UTF-8'), PHP_EOL;
		}
	?>
	</pre>
	</form>
</body>
</html>
