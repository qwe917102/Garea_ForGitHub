<?php require __DIR__ . '/__db_connect.php';

$result = [
   'success' => false,
   'code' => 0,
   'info' => '您有資料未填妥',
   'post' => []
];



if (empty($_POST['address']) or empty($_POST['invoice'])) {
   echo json_encode($result);
   exit;
}
$result['post'] = $_POST;

$order_number = strtotime('now').$_SESSION['loginUser']['sid'];
$address = $_POST['address'];
$invoice = $_POST['invoice'];
$totalP = $_POST['totalP'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$total_qty = $_POST['total_qty'];
$date = date('Y-m-d');
$member_sid = $_SESSION['loginUser']['sid'];

$stmt = $pdo->query("INSERT INTO `order_list`(`order_number`,`date`, `member_sid`,`phone`, `address`, `invoice`, `total_price`,`total_qty`) VALUES ($order_number,'$date',$member_sid,'$phone','$address','$invoice','$totalP',$total_qty)");

foreach($product as $p => $q){
   $o_stmt = $pdo->query("INSERT INTO `order_product`(`which`, `belong`, `qty`) VALUES ($p,$order_number,$q)");
}

if ($stmt->rowCount() == 1) {
   $result['success'] = true;
   $result['code'] = 200;
   $result['info'] = '訂購成功';
} else {
   $result['code'] = 400;
   $result['info'] = '發生錯誤';
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);