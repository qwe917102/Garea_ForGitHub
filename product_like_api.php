<?php include __DIR__ . '/__db_connect.php';

$result = [
    'success' => false,
    'info' => '',
    'getData' => [],
];

if(!isset($_SESSION['loginUser'])){
    $result['info'] = '您未登入會員';
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

if(!isset($_POST['sid'])){
    $result['info'] = '您沒有選取任何商品';
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}
$result['getData'] = $_POST;
$product_sid = $_POST['sid'];
$member_sid = $_SESSION['loginUser']['sid'];

$like_sql = "SELECT * FROM `product_like` WHERE `belong` = $member_sid AND `which` = $product_sid";
$like_stmt = $pdo->query($like_sql);
if($like_stmt->rowCount()>=1){
    $result['info'] = '您已收藏此產品';
    $result['code'] = 111;
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "INSERT INTO `product_like`(`belong`, `which`) VALUES ('$member_sid','$product_sid')";
$stmt = $pdo->query($sql);

if($stmt->rowCount()==1){
    $result['info'] = '成功加入收藏';
    $result['success'] = true;

    echo json_encode($result, JSON_UNESCAPED_UNICODE);
}