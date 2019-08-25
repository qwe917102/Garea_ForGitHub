<?php include __DIR__ . '/__db_connect.php';

$brand = isset($_POST['brand']) ? intval($_POST['brand']) : 0;
$products = isset($_POST['products']) ? intval($_POST['products']) : 0;

$result = [
    'brand' => $brand,
    'products' => $products,
    'rows' => [],
];

$sql = "SELECT * FROM `products_list` WHERE 1 AND `products` = $products AND `brand` = $brand ORDER BY RAND()";
$stmt = $pdo->query($sql);
$rows = $stmt->fetch();


$result['rows'] = $rows;
echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>