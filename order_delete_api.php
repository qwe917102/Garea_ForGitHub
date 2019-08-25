<?php require __DIR__ . '/__db_connect.php';


$product_sid = $_GET['order'];
$sql = "DELETE FROM `order_list` WHERE `sid`= $product_sid";
$stmt = $pdo->query($sql);

header('Location: member_center_order_list.php');
exit;


?>