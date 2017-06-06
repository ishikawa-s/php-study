<?php
$con = mysql_connect("localhost", "root", "") or die("接続失敗");
$mydb = mysql_select_db("shop", $con) or die("dbがありません");
$query = "SELECT id, shohin_mei, shohin_bunrui FROM Shohin";
$res = mysql_query($query);
$output = array();
while($e = mysql_fetch_assoc($res)){$output[] = $e;}
mysql_free_request($res);
mysql_close($con);
echo json_encode($output);