<?php

$host = '';
$dbname = '';
$charset = 'utf8mb4';

$dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";
$username = '';
$password = '';
$options = [
    \PDO::ATTR_EMULATE_PREPARES => false,
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
];

try {
    $dbh = new \PDO($dsn, $username, $password, $options);
} catch (\PDOException $e){
    exit;
}
