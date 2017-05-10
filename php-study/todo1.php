<?php header('Contenttype:text/html; charset=UTF-8'); ?>

<html>
<body>
	<form method='post' action="todo1.php">
		<input type="text" name="todocont" size="30" maxlength="100">
	<?php
	$prioDisp = 2;
	$selStr = array('', '', '');
	$prio = 0;
	if(isset($_POST['priority'])){
		$prio = (int)$_POST['priority'];
	}
	?>
		<select name='priority'>
		<option value="2">すべて
		<option value="1">高
		<option value="0">低
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
			$sth->bindValue(1, $_POST['todocont'], PDO::PARAM_STR);
			$sth->bindValue(2, $prio, PDO::PARAM_INT);
			$sth->execute();
		}

		$sql = 'SELECT id, todo FROM todolist';
		$sth = $dbh->prepare($sql);
		$sth->execute();
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
			echo '<input type="checkbox" name="chktodo[]" value="';
			echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8');
			echo '">';
			echo htmlspecialchars($row['todo'], ENT_QUOTES, 'UTF-8');
		}
	?>
	</pre>
	</form>
</body>
</html>
