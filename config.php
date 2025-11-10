<?php
session_start();

$host = 'infrastructure.mariadb:3306';
$dbname = 'users_ft';
$username = 'fedorov.m.a';
$password = '7479';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}
?>