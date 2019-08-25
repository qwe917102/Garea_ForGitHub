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


$sql = "DELETE FROM `product_like` WHERE `belong`= $member_sid AND `which`= $product_sid";
$stmt = $pdo->query($sql);

if($stmt->rowCount()==1){
    $result['info'] = '成功取消收藏';
    $result['success'] = true;

    echo json_encode($result, JSON_UNESCAPED_UNICODE);
}