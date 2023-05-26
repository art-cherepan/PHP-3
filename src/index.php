<?php

$config = include __DIR__ . '/config.php';

$dsn = $config['db'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'];

$dbh = new \PDO($dsn, $config['user'], $config['password']);

$sth = $dbh->prepare('SELECT * FROM News');

$sth->execute([]);
var_dump($sth->fetch());
