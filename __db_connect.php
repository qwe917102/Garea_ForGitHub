<?php
$db_host = 'localhost'; // 資料庫的主機
$db_name = 'ga_data'; // 資料庫名稱
$db_user = 'root'; // 資料庫用戶
$db_pass = 'root'; // 用戶密碼
$db_charset = 'utf8'; // 使用的編碼

$dsn = "mysql:host={$db_host};dbname={$db_name}";


// PDO連線
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES {$db_charset} "
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $pdo->query("SET NAMES utf8");

if (!isset($_SESSION)) {
    session_start();
}
