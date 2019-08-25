<?php 

session_start();

$result = [
    'success' => false,
    'info' => '',
    'getData' => [],
];

if(! isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if(isset($_GET['sid'])) {
    $sid = intval($_GET['sid']); 

    if(!empty($_GET['qty'])){
        // 加入或修改
        $_SESSION['cart'][$sid] = intval($_GET['qty']);
        $result['success'] = true;
        $result['info'] = '成功加入購物車';
    } else {
        // 刪除
        unset($_SESSION['cart'][$sid]);
        $result['success'] = true;
        $result['info'] = '成功刪除';
    }
}

$result['getData'] =$_SESSION['cart'];

echo json_encode($result, JSON_UNESCAPED_UNICODE);