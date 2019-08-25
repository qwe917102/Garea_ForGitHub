<?php include __DIR__ . '/__db_connect.php';

$sid = isset($_POST['sid']) ? intval($_POST['sid']) : 0;
$qty = isset($_POST['qty']) ? intval($_POST['qty']) : 0;
$_SESSION['cart'][$sid] = $qty;

echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
