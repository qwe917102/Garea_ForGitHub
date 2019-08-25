<?php require __DIR__ . '/__db_connect.php';

$result = [
   'success' => false,
   'code' => 0,
   'info' => '欄位資料不足',
   'post' => $_POST,
];

// TODO:檢查欄位
// filter_var('bob@example.com', FILTER_VALIDATE_EMAIL)
// 檢查email格式
if (empty($_POST['email']) or empty($_POST['password']) or empty($_POST['nickname'])) {
   // 四個欄位只要有一個沒填, 就結束
   echo json_encode($result);
   exit;
}

// 判斷email是否已使用過,如何處理
$sql = "SELECT * FROM `members` WHERE `email`=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST['email']]);
if ($stmt->rowCount() >= 1) {
   $result['code'] = 420;
   $result['info'] = '這個 email 已經被人註冊過囉！';

   echo json_encode($result);
   exit;
}

$hash = sha1($_POST['email'] . uniqid() . rand());
// 產生一個不容易相同的字串

$stmt = $pdo->prepare("INSERT INTO `members`
(
    `email`, `nickname`, `password`, `hash`, `mobile`, `postName`, `address`, `created_at`
) VALUES ( 
   ?, ? , SHA1(?), ?, ?, ?, ?, NOW()
)");

$stmt->execute([
   $_POST['email'],
   $_POST['nickname'],
   $_POST['password'],
   $hash,
   $_POST['mobile'],
   $_POST['postName'],
   $_POST['address'],
]);

if ($stmt->rowCount() == 1) {
   $result['success'] = true;
   $result['code'] = 200;
   $result['info'] = '資料新增成功';
} else {
   $result['code'] = 400;
   $result['info'] = '資料新增錯誤';
}

// $result['rowCount'] = $stmt->rowCount();

echo json_encode($result, JSON_UNESCAPED_UNICODE);
