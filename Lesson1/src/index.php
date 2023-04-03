<?php

$dsn = 'mysql:host=mysql;dbname=test';
$username = 'test';
$pass = 'test';

$dbh = new \PDO($dsn, $username, $pass);

$sth = $dbh->prepare('SELECT * FROM News');
$sth->execute([]);
var_dump($sth->fetch());
