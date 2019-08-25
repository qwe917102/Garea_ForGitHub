<?php include __DIR__ . '/__db_connect.php';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
unset($_SESSION['cart'][$sid]) ;
header("Location: shopping_cart_page.php");

?>