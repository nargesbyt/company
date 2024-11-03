<?php

$host = $_ENV['DB_HOST'];
$db = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
try {
	$pdo = new PDO($dsn, $user, $password);

} catch (PDOException $e) {
	echo $e->getMessage();
}
