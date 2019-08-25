<?php include __DIR__ . '/__db_connect.php';


$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$brand = isset($_GET['brand']) ? intval($_GET['brand']) : 0;
$products = isset($_GET['products']) ? intval($_GET['products']) : 0;
$type = isset($_GET['type']) ? $_GET['type'] : 0;
$price = isset($_GET['price']) ? intval($_GET['price']) : 0;
$search = isset($_GET['search']) ? $_GET['search'] : '';

$per_page = 9;

$my_qs = [
    'page' => $page,
    'brand' => $brand,
    'products' => $products,
    'type' => $type,
    'price' => $price
];

$result = [
    'page' => $page,
    'brand' => $brand,
    'type' => $type,
    'products' => $products,
    'price' => $price,
    'per_page' => $per_page,
    'total_rows' => 0,
    'total_pages' => 0,
    'qs' => $my_qs,
    'rows' => [],
    'member_sid' => '',
    'search' => $search,
];

$where = " WHERE 1";
$start = ($page-1)*$per_page;
if(!empty($brand)){
    $where .= " AND `brand` = $brand";
};
if(!empty($type)){
    $where .= " AND `type` = '$type'";
};
if(!empty($price)){
    $where .= " AND `price_number` = '$price'";
};
if(!empty($products)){
    $where .= " AND `products` = '$products'";
}

if(!empty($search)){
    $where .= sprintf(" AND `products_name` LIKE %s ", $pdo->quote("%{$search}%") );
}

$result['where'] = $where;

$t_sql = "SELECT COUNT(1) FROM `products_list`".$where;
$total_rows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$result['total_rows'] = $total_rows;

$total_pages = ceil($total_rows/$per_page);
$result['total_pages'] = $total_pages;

$sql = "SELECT * FROM `products_list`".$where." ORDER BY `brand` ASC, `products` ASC  LIMIT $start, $per_page";

if(isset($_SESSION['loginUser'])){
    $member_sid = $_SESSION['loginUser']['sid'];
    $result['member_sid'] = $member_sid;
    
    $sql = "SELECT `products_list`.*,`product_like`.`which`,`belong` FROM `products_list` LEFT JOIN `product_like` ON `products_list`.`sid` = `product_like`.`which` AND `product_like`.`belong`= $member_sid".$where." ORDER BY `brand` ASC, `products` ASC, `sid` ASC  LIMIT $start, $per_page";
}

$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll();
$result['rows'] = $rows;
echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>








