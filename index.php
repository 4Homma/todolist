<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Todoリスト</title>
</head>
<body>
<?php
try{
  $db = new PDO('mysql:dbname=todolist;host=localhost');
  $user ='root';
  $password='root';
  $dbh = new PDO($dsn,$user,$password);
  $dbh->query('SET NAMES utf8');
  $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  print 'データベースに接続出来ました。';
}catch(PDOException $e){
  die('エラーメッセージ：'.$e->getMessage());
}

if(isset($_GET['add'])){
  $item = $_GET['item'];
}

 ?>
<h1>Todoリスト</h1>
<form action="index.php" method="post">
<ul>
    <li><span>タスク名</span><input type="text" name="taskName"></li>
    <li><span>メモ</span><textarea name="memo"></textarea></li>
    <li><input type="submit" name="submit"></li>
</ul>
</form>
</body>
</html>
