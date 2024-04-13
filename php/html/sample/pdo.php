<?php
$dsn = 'mysql:dbname=my_database;host=mysql';
$user = 'my_user';
$password = 'my_password';

try {
  $dbh = new PDO($dsn, $user, $password);
  echo "接続成功\n";
} catch (PDOException $e) {
  echo "接続失敗: " . $e->getMessage() . "\n";
  exit();
}
