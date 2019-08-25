<?php require __DIR__ . '/__db_connect.php';

unset($_SESSION['cart']);

$member = $_SESSION['loginUser']['sid'];
$sql = "SELECT * FROM `order_list` WHERE 1 AND `member_sid` = $member ORDER BY `sid` DESC";

$stmt = $pdo->query($sql);
$row = $stmt->fetch();


?>

<?php include __DIR__ . '/main_page_header.php' ?>

<div class="container d-none d-md-block">
	<div class="d-flex justify-content-between mt-5 pt-5 align-items-center">
		<div id="step1_step_box" class="step_box w-100">
			<p class="m-0"><span class="middle_text">01.</span>確認購物車</p>
		</div>
		<div class="step_right p-3"><i class="fas fa-chevron-right"></i></div>
		<div id="step2_step_box" class="step_box w-100">
			<p class="m-0"><span class="middle_text">02.</span>運送與付款</p>
		</div>
		<div class="step_right p-3"><i class="fas fa-chevron-right"></i></div>
		<div id="step3_step_box" class="step_box w-100">
			<p class="m-0"><span class="middle_text">03.</span>填寫資料</p>
		</div>
		<div class="step_right p-3"><i class="fas fa-chevron-right"></i></div>
		<div id="step4_step_box" class="step_box w-100 active">
			<p class="m-0"><span class="middle_text">04.</span>完成訂購</p>
		</div>
	</div>
</div>
<div class="container d-block d-md-none">
	<div class="d-flex mt-5 pt-5 align-items-center w-100 justify-content-around">
		<div id="mobile_step1_step_box" class="w-100 mobile_step_Bigbox px-1 row m-0 align-items-center justify-content-center small_text">
			<div id="mobile_step1_circleBox" class=" d-flex flex-column align-items-center justify-content-center col-5">
				<p class="mobile_step_box2 text-center d-flex flex-column justify-content-center m-0">01</p>
			</div>
			<p id="mobile_step1_textBox" class="my-0 col-7 p-0">確認商品</p>
		</div>
		<div class="step_right"><i class="fas fa-chevron-right"></i></div>
		<div id="mobile_step2_step_box" class="w-100 mobile_step_Bigbox px-1 row m-0 align-items-center justify-content-center small_text">
			<div id="mobile_step2_circleBox" class=" d-flex flex-column align-items-center justify-content-center col-5">
				<p class="mobile_step_box2 text-center d-flex flex-column justify-content-center m-0">02</p>
			</div>
			<p id="mobile_step2_textBox" class="my-0 col-7 p-0">運送付款</p>
		</div>
		<div class="step_right"><i class="fas fa-chevron-right"></i></div>
		<div id="mobile_step3_step_box" class="w-100 mobile_step_Bigbox px-1 row m-0 align-items-center justify-content-center small_text">
			<div id="mobile_step3_circleBox" class=" d-flex flex-column align-items-center justify-content-center col-5">
				<p class="mobile_step_box2 text-center d-flex flex-column justify-content-center m-0">03</p>
			</div>
			<p id="mobile_step3_textBox" class="my-0 col-7 p-0">填寫資料</p>
		</div>
		<div class="step_right"><i class="fas fa-chevron-right"></i></div>
		<div id="mobile_step4_step_box" class="w-100 mobile_step_Bigbox px-1 row m-0 align-items-center justify-content-center small_text">
			<div id="mobile_step4_circleBox" class=" d-flex flex-column align-items-center justify-content-center col-5">
				<p class="mobile_step_box text-center d-flex flex-column justify-content-center m-0">04</p>
			</div>
			<p id="mobile_step4_textBox" class="my-0 col-7 p-0">
		</div>
	</div>
</div>
<div id="step4_page" class="mt-5 mb-3 pb-3">
	<div class="container p-2 mt-3 text-center auto_text_green">
		<p class="middle_text p-2 m-0">訂購已完成！<br> 可以在會員中心查看訂單資訊囉！</p>
	</div>
	<div class="container mt-5 mb-1 d-flex flex-column align-items-center">
		<div class="step_border row mx-2 step_product_bgc_2 step_payment_spacing">
			<p class="middle_text_2 py-3 pl-4 m-0 w-100">收件人資訊</p>
			<div class="w-100 d-flex py-2 step_border_top row m-0">
				<p class="my-0 mx-4 col-12 col-sm-4">姓名</p>
				<p class="my-0 mx-4 mx-sm-0 col-12 col-sm-6"><?= $_SESSION['loginUser']['nickname'] ?></p>
			</div>
			<div class="w-100 d-flex py-2 row m-0">
				<p class="my-0 mx-4 col-12 col-sm-4">手機號碼</p>
				<p class="my-0 mx-4 mx-sm-0 col-12 col-sm-6"><?= $row['phone'] ?></p>
			</div>
			<div class="w-100 d-flex py-2 row m-0">
				<p class="my-0 mx-4 col-12 col-sm-4">送貨地址</p>
				<p class="my-0 mx-4 mx-sm-0 col-12 col-sm-6"><?= $row['address'] ?></p>
			</div>
			<div class="w-100 d-flex py-2 row m-0 align-items-center">
				<p class="my-0 mx-4 col-12 col-sm-4">發票類型</p>
				<p class="my-0 mx-4 mx-sm-0 col-12 col-sm-6"><?= $row['invoice'] ?></p>
			</div>
			<div class="w-100 justify-content-md-end d-flex text-center auto_text_green row justify-content-center m-0">
				<div class=" py-2 mx-2">
					<p class="middle_text_2 p-2 m-0">共計<?= $row['total_qty'] ?>件商品</p>
				</div>
				<div class=" py-2 mx-2">
					<p class="middle_text_2 p-2 m-0">總計金額<?= $row['total_price'] ?></p>
				</div>
			</div>
		</div>
		<div class="m-4 mt-5 pt-5">
			<a href="main_page.php" class="d-block py-2 px-5 step_cancel_bgc step_border auto_textcolor">回到首頁</a>
		</div>
	</div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script>
	$("#mobile_step1_textBox").hide()
	$("#mobile_step2_textBox").hide()
	$("#mobile_step3_textBox").hide()
</script>

<?php require __DIR__ . '/__html_end.php' ?>