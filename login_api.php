<?php require __DIR__ . '/__db_connect.php';

$result = [
   'success' => false,
   'code' => 0,
   'info' => '欄位資料不足',
   'post' => $_POST,
];

// TODO:檢查欄位
if (empty($_POST['email']) or empty($_POST['password'])) {
   // 2個欄位只要有一個沒填, 就結束
   echo json_encode($result);
   exit;
}

$stmt = $pdo->prepare("SELECT `sid`, `email`, `nickname` FROM `members` WHERE `email`=? AND `password` =SHA1(?)");

$stmt->execute([
   $_POST['email'],
   $_POST['password']
]);

if ($stmt->rowCount() == 1) {
   $result['success'] = true;
   $result['code'] = 200;
   $result['info'] = '登入成功';

   $_SESSION['loginUser'] = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
   $result['code'] = 400;
   $result['info'] = '帳號或密碼錯誤';
}

// $result['rowCount'] = $stmt->rowCount();

echo json_encode($result, JSON_UNESCAPED_UNICODE);
