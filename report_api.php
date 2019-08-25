<?php require __DIR__ . '/__db_connect.php';

$result = [
   'success' => false,
   'code' => 0,
   'info' => '欄位資料不足',
   'post' => $_POST,
];

// 先確認是否已登入
if (!isset($_SESSION['loginUser'])) {
   $result['info'] = "您未登入會員";
   echo json_encode($result, JSON_UNESCAPED_UNICODE);
   exit;
}

if (empty($_POST['status_statement'])) {
   // 一個欄位只要沒填, 就結束
   echo json_encode($result);
   exit;
}

$member_sid = $_SESSION['loginUser']['sid'];

$stmt = $pdo->prepare("INSERT INTO `report_problem`(`typeProblem`, `problemDetail`, `statusStatement`, `belong`) VALUES (?, ?, ?, ?)");

$stmt->execute([
   $_POST['type_of_problem'],
   $_POST['problem_detail'],
   $_POST['status_statement'],
   $member_sid
]);

if ($stmt->rowCount() == 1) {
   $result['success'] = true;
   $result['code'] = 200;
   $result['info'] = '問題回報成功';
} else {
   $result['code'] = 400;
   $result['info'] = '問題回報錯誤';
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
