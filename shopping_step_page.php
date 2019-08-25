<?php require __DIR__ . '/__db_connect.php';
if (!empty($_SESSION['cart'])) {
	$keys = array_keys($_SESSION['cart']);

	$sql = sprintf(
		"SELECT * FROM `products_list` WHERE `sid` IN (%s)",
		implode(',', $keys)
	);

	$stmt = $pdo->query($sql);
	$rows = $stmt->fetchAll();

	$dict = array();
	foreach ($rows as $r) {
		$dict[$r['sid']] = $r;
	}
}
?>

<?php include __DIR__ . '/main_page_header.php' ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
	.sweet-alert {
		background-color: #211661;
		border-radius: 0;
		font-family: 'Noto Sans TC', sans-serif;
	}

	.sweet-alert h2,
	.sweet-alert p {
		color: #ffffff;
	}

	.sweet-alert[data-has-confirm-button=false][data-has-cancel-button=false] {
      padding-bottom: 10px;
   }


	.sweet-alert .sa-success {
		border-bottom-color: #ffffff !important;
	}

	.sweet-alert .sa-success::before,
	.sweet-alert .sa-success::after {
		display: none;
	}

	.sweet-alert .sa-success .sa-placeholder {
		border-color: rgba(165, 220, 134) !important;
	}

	.sweet-alert .sa-success .sa-line .sa-tip,
	.sweet-alert .sa-success .sa-line .sa-long {
		background-color: #ffffff;
		border-radius: 1px;
	}

	.sweet-alert .sa-icon.sa-success .sa-fix {
		display: none;
	}

	.sweet-alert button.confirm {
		background: #412f8f !important;
		border-radius: 0;
		border: 2px solid #ffffff;
	}
</style>
<div class="container bg-container">
	<div class="container d-none d-md-block">
		<div class="d-flex justify-content-between mt-5 pt-5 align-items-center">
			<div id="step1_step_box" class="step_box active w-100">
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
			<div id="step4_step_box" class="step_box w-100">
				<p class="m-0"><span class="middle_text">04.</span>完成訂購</p>
			</div>
		</div>
	</div>
	<div class="container d-block d-md-none">
		<div class="d-flex mt-5 pt-5 align-items-center w-100 justify-content-around">
			<div id="mobile_step1_step_box" class="w-100 mobile_step_Bigbox row m-0 align-items-center justify-content-center small_text">
				<div id="mobile_step1_circleBox" class=" d-flex flex-column align-items-center justify-content-center col-5">
					<p class="mobile_step_box text-center d-flex flex-column justify-content-center m-0">01</p>
				</div>
				<p id="mobile_step1_textBox" class="my-0 col-7 p-0">確認商品</p>
			</div>
			<div class="step_right"><i class="fas fa-chevron-right"></i></div>
			<div id="mobile_step2_step_box" class="w-100 mobile_step_Bigbox row m-0 align-items-center justify-content-center small_text">
				<div id="mobile_step2_circleBox" class=" d-flex flex-column align-items-center justify-content-center col-5">
					<p class="mobile_step_box2 text-center d-flex flex-column justify-content-center m-0">02</p>
				</div>
				<p id="mobile_step2_textBox" class="my-0 col-7 p-0">運送付款</p>
			</div>
			<div class="step_right"><i class="fas fa-chevron-right"></i></div>
			<div id="mobile_step3_step_box" class="w-100 mobile_step_Bigbox row m-0 align-items-center justify-content-center small_text">
				<div id="mobile_step3_circleBox" class=" d-flex flex-column align-items-center justify-content-center col-5">
					<p class="mobile_step_box2 text-center d-flex flex-column justify-content-center m-0">03</p>
				</div>
				<p id="mobile_step3_textBox" class="my-0 col-7 p-0">填寫資料</p>
			</div>
			<div class="step_right"><i class="fas fa-chevron-right"></i></div>
			<div id="mobile_step4_step_box" class="w-100 mobile_step_Bigbox row m-0 align-items-center justify-content-center small_text">
				<div id="mobile_step4_circleBox" class=" d-flex flex-column align-items-center justify-content-center col-5">
					<p class="mobile_step_box2 text-center d-flex flex-column justify-content-center m-0">04</p>
				</div>
				<p id="mobile_step4_textBox" class="my-0 col-7 p-0">
			</div>
		</div>
	</div>
	<!-- ----------------------step img ------------------------- -->
	<!-- <div id="step1_page" class=""> -->
	<div id="all_shopping_step" class="container-fluid p-0 mt-5 mb-4">
		<div class="container">
			<div class="d-flex justify-content-between row mx-2 step_product_bgc">
				<div id="step1_page" class="">
					<!-- 一格產品 -->
					<?php foreach ($rows as $r) : ?>
					<div class="product_item m-3" data-sid="<?= $r['sid'] ?>">
						<div class="row align-items-center text-center text-sm-left">
							<div class="my-3 col-7 mx-auto mx-sm-0 col-sm-5 col-md-4 col-lg-2">
								<img src="img/product/<?= $r['products_img'] ?>" alt="" class="img-fluid">
							</div>
							<div class="my-2 step_product_information text-white vertical col-10 mx-auto mx-sm-0 col-sm-7 col-md-8 col-lg-5">
								<h4 class="middle_text_2 mx-0 mx-md-auto">產品類別:<?php switch ($r['products']) {
																										case 1:
																											echo '滑鼠';
																											break;
																										case 2:
																											echo '鍵盤';
																											break;
																										case 3:
																											echo '耳機';
																											break;
																									}
																									?></h4>
								<h6 class="middle_text_2 mx-0 mx-md-auto"><?= $r['products_name'] ?></h6>
								<!-- <h6 class="middle_text_2"><?= $r['products_brief'] ?></h6> -->
							</div>
							<div class="d-flex cart_quantity_bar step_quantity_bar justify-content-center my-3 col-12 col-sm-5 col-md-4 col-lg-2">
								<form action="" class="quantity_form d-flex justify-content-center">
									<input type="button" value="-" class="quantity_cut product_inner_border_green2" data-sid="<?= $r['sid'] ?>" field='quantity'>
									<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------- -->
									<input type="text" value="<?= $_SESSION['cart'][$r['sid']] ?>" name="quantity" class="quantity_inside_val text-center product_inner_border_green2" readonly>
									<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------- -->
									<input type="button" value="+" class="quantity_plus product_inner_border_green2" data-sid="<?= $r['sid'] ?>" field='quantity'>
								</form>
							</div>
							<div class="row align-items-center h-75 col-12 col-sm-7 col-md-8 col-lg-3 text-center">
								<h4 class="cart_product_price text-white middle_text my-3 col-8 col-sm-6 col-md-9 col-lg-7 text-md-right text-lg-center" data-price="<?= $r['price_val'] ?>">NT<?php
																																																														$price = $r['price_val'] * $_SESSION['cart'][$r['sid']];
																																																														$length = strlen($price);
																																																														$priceFuck = substr_replace($price, ',', $length - 3, 0);

																																																														echo $priceFuck;
																																																														?></h4>
								<a href="shopping_cart_delete_api.php?sid=<?= $r['sid'] ?>" class="m-0 d-block py-1 px-3 cart_cancel_bgc cart_border auto_textcolor col-4 col-sm-6 col-md-3 col-lg-5">取消</a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<!-- 一格產品 -->
				<!------------------------step 2------------------------- -->
				<div id="step2_page" class="d-none w-100 my-2 mx-4">
					<div>
						<div class="py-2">
							<label for="radio1" class="step_payment_spacing a11y-radio-label m-0">台灣及離島</label>
						</div>
						<div id="step2_redio_1" class="py-2 step_border_top">
							<input type="radio" name="radiobuttons" class="a11y-radio" id="f711" data-freight="60" />
							<label for="f711" class="step_payment_spacing ml-2 a11y-radio-label m-0">7-11超商取貨 60元</label>
						</div>
						<div id="step2_redio_2" class="py-2 step_border_top">
							<input type="radio" name="radiobuttons" class="a11y-radio" id="f_card" data-freight="60" />
							<label for="f_card" class="step_payment_spacing ml-2 a11y-radio-label m-0">信用卡宅配收貨 60元</label>
						</div>
						<div id="step2_redio_3" class="py-2 step_border_top">
							<input type="radio" name="radiobuttons" class="a11y-radio" id="f_home" data-freight="60" />
							<label for="f_home" class="step_payment_spacing ml-2 a11y-radio-label m-0">宅配貨到付款 60元</label>
						</div>
					</div>
				</div>
				<!------------------------step 2------------------------- -->
				<!------------------------step 3-1 信用卡付款------------------------- -->
				<div id="step3-1_page" class="d-none w-100 my-2 mx-4">
					<form id="form_cardpay" action="" class="step_payment_spacing">
						<div class="cursor_default">
							<p class="pt-3 m-0">收件人資訊</p>
							<p class="pb-3 m-0 small_text auto_text_green">信用卡付款</p>
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="username" class="m-0 col-12 col-sm-4 px-0">姓名</label>
							<input type="text" class="mx-0 col-12 col-sm-6 px-0" id="username" name="username" placeholder="請輸入收件人姓名" />
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="mobile" class="m-0 col-12 col-sm-4 px-0">手機號碼</label>
							<input type="text" class="mx-0 col-12 col-sm-6 px-0" id="mobile" name="mobile" placeholder="請輸入手機號碼" />
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="county" class="m-0 col-12 col-sm-4 px-0">請選擇縣市</label>
							<select name="county" class="step_store mx-0 col-12 col-sm-6 px-0" id="county">
								<option value="">請選擇縣市</option>
								<option value="africa">Africa</option>
								<option value="northamerica">North America</option>
								<option value="southamerica">South America</option>
								<option value="antarctica">Antarctica</option>
								<option value="asia">Asia</option>
								<option value="australia">Australia</option>
								<option value="europe">Europe</option>
							</select>
						</div>
						<div class="w-100 d-flex py-2 step_border_top_ Brow row m-0 px-0">
							<label for="district" class="m-0 col-12 col-sm-4 px-0">請選擇地區</label>
							<select name="district" class="step_store mx-0 col-12 col-sm-6 px-0" id="district">
								<option value="">請選擇地區</option>
								<option value="africa">Africa</option>
								<option value="northamerica">North America</option>
								<option value="southamerica">South America</option>
								<option value="antarctica">Antarctica</option>
								<option value="asia">Asia</option>
								<option value="australia">Australia</option>
								<option value="europe">Europe</option>
							</select>
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="address" class="m-0 col-12 col-sm-4 px-0">請輸入地址</label>
							<input type="text" class="mx-0 col-12 col-sm-6 px-0" id="address" name="address" placeholder="請輸入地址" />
						</div>
						<div class="w-100 d-flex py-2 step_border_top row m-0 px-0">
							<label for="credit_card" class="m-0 col-12 col-sm-4 px-0">請選擇信用卡</label>
							<select name="credit_card" class="step_store mx-0 col-12 col-sm-6 px-0" id="credit_card">
								<option value="">請選擇信用卡</option>
								<option value="africa">Africa</option>
								<option value="northamerica">North America</option>
								<option value="southamerica">South America</option>
							</select>
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B d-flex row m-0 px-0">
							<p class="m-0 col-12 col-sm-4 px-0">信用卡卡號</p>
							<p class="auto_text_green m-0 col-12 col-sm-6 px-0 small_text">限使用台灣核發之信用卡</p>
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="card_time" class="m-0 col-12 col-sm-4 px-0">有效期限</label>
							<input type="text" class="mx-0 col-12 col-sm-6 px-0" id="card_time" name="card_time" placeholder="MM-YY" />
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="card_pass_num" class="m-0 col-12 col-sm-4 px-0">輸入安全碼</label>
							<input type="text" class="mx-0 col-12 col-sm-6 px-0" id="card_pass_num" name="card_pass_num" placeholder="信用卡安全碼" />
						</div>
						<p class="py-3 m-0 step_border_top w-100">發票類型</p>
						<div class="d-flex py-2 step_border_top_B row w-100 text-center m-0 cursor_point">
							<div class="Own_num_btn py-1 col-12 col-sm-4 px-0 auto_textcolor ">
								<a class="d-block mx-1 px-2 step_cancel_bgc step_border">個人</a>
							</div>
							<div class="Uniform_num_btn py-1 col-12 col-sm-4 px-0 auto_textcolor cursor_point">
								<a class="d-block mx-1 px-2 step_cancel_bgc step_border">統一編號</a>
							</div>
							<div class="donation_btn py-1 col-12 col-sm-4 px-0 auto_textcolor cursor_point">
								<a class="d-block mx-1 px-2 step_cancel_bgc step_border">捐贈發票</a>
							</div>
						</div>
						<p class="w-100 m-0 py-2 step_border_top_B text-center text-sm-left">依財政部規定，發票已託管，無需開立紙本發票。</p>
						<div class="Uniform_num">
							<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
								<label for="Uniform_num" class="m-0 col-12 col-sm-4 px-0">統一編號</label>
								<input type="text" class=" mx-0 col-12 col-sm-6" id="Uniform_num" name="Uniform_num" placeholder="請輸入統一編號" />
							</div>
						</div>
						<div class="donation">
							<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
								<label for="donation" class="m-0 col-12 col-sm-4 px-0">捐贈單位</label>
								<input type="text" class="mx-0 col-12 col-sm-6" id="donation" name="donation" placeholder="請輸入捐贈單位愛心碼" />
							</div>
						</div>
					</form>
				</div>
				<!------------------------step 3-1------------------------- -->
				<!------------------------step 3-2 宅配------------------------- -->
				<div id="step3-2_page" class="d-none w-100 my-2 mx-4">
					<form id="form_drop_home" action="" class="step_payment_spacing">
						<div class="cursor_default">
							<p class="pt-3 m-0">收件人資訊</p>
							<p class="pb-3 m-0 small_text auto_text_green">宅配貨到付款</p>
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="username" class="m-0 col-12 col-sm-4 px-0">姓名</label>
							<input type="text" class="mx-0 col-12 col-sm-6 px-0" id="username" name="username" placeholder="請輸入收件人姓名" />
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="mobile" class="m-0 col-12 col-sm-4 px-0">手機號碼</label>
							<input type="text" class="mx-0 col-12 col-sm-6 px-0" id="mobile_home" name="mobile" placeholder="請輸入手機號碼" />
						</div>
						<!-- <div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
								<label for="county" class="m-0 col-12 col-sm-4 px-0">請選擇縣市</label>
							    <select name="county" class="step_store mx-0 col-12 col-sm-6 px-0" id="county">
							      <option value="">請選擇縣市</option>
							      <option value="africa">Africa</option>
							      <option value="northamerica">North America</option>
							      <option value="southamerica">South America</option>
							      <option value="antarctica">Antarctica</option>
							      <option value="asia">Asia</option>
							      <option value="australia">Australia</option>
							      <option value="europe">Europe</option>
							    </select>
							</div> -->
						<!-- <div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
								<label for="district" class="m-0 col-12 col-sm-4 px-0">請選擇地區</label>
							    <select name="district" class="step_store mx-0 col-12 col-sm-6 px-0" id="district">
							      <option value="">請選擇地區</option>
							      <option value="africa">Africa</option>
							      <option value="northamerica">North America</option>
							      <option value="southamerica">South America</option>
							      <option value="antarctica">Antarctica</option>
							      <option value="asia">Asia</option>
							      <option value="australia">Australia</option>
							      <option value="europe">Europe</option>
							    </select>
							</div> -->
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="address" class="m-0 col-12 col-sm-4 px-0">請輸入地址</label>
							<input type="text" class="mx-0 col-12 col-sm-6 px-0" id="address_home" name="address" placeholder="請輸入地址" />
						</div>
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<p class="py-3 m-0 step_border_top w-100">發票類型</p>
						<div class="d-flex py-2 step_border_top_B row w-100 text-center m-0 cursor_point">
							<div class="Own_num_btn py-1 col-12 col-sm-4 px-0 auto_textcolor">
								<a class="d-block mx-1 px-2 step_cancel_bgc step_border py-2">個人</a>
							</div>
							<div class="Uniform_num_btn py-1 col-12 col-sm-4 px-0 auto_textcolor cursor_point">
								<a class="d-block mx-1 px-2 step_cancel_bgc step_border py-2">統一編號</a>
							</div>
							<div class="donation_btn py-1 col-12 col-sm-4 px-0 auto_textcolor cursor_point">
								<a class="d-block mx-1 px-2 step_cancel_bgc step_border py-2">捐贈發票</a>
							</div>
							<input type="hidden" class="invoice" value="個人">
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						</div>
						<p class="w-100 m-0 py-2 step_border_top_B text-center text-sm-left">依財政部規定，發票已託管，無需開立紙本發票。</p>
						<div class="Uniform_num">
							<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
								<label for="Uniform_num" class="m-0 col-12 col-sm-4 px-0">統一編號</label>
								<input type="text" class=" mx-0 col-12 col-sm-6" id="Uniform_num" name="Uniform_num" placeholder="請輸入統一編號" />
							</div>
						</div>
						<div class="donation">
							<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
								<label for="donation" class="m-0 col-12 col-sm-4 px-0">捐贈單位</label>
								<input type="text" class="mx-0 col-12 col-sm-6" id="donation" name="donation" placeholder="請輸入捐贈單位愛心碼" />
							</div>
						</div>
					</form>
				</div>
				<!------------------------step 3-2------------------------- -->
				<!------------------------step 3-3 7-11------------------------- -->
				<div id="step3-3_page" class="d-none w-100 my-2 mx-4">
					<form id="form_take_store" action="" class="step_payment_spacing">
						<div class="cursor_default">
							<p class="pt-3 m-0">收件人資訊</p>
							<p class="pb-3 m-0 small_text auto_text_green">超商取貨付款</p>
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="username" class="m-0 col-12 col-sm-4 px-0">姓名</label>
							<input type="text" class="m-0 col-12 col-sm-6 px-0" id="username" name="username" placeholder="請輸入收件人姓名" />
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="mobile" class="m-0 col-12 col-sm-4 px-0">手機號碼</label>
							<input type="text" class="m-0 col-12 col-sm-6 px-0" id="mobile" name="mobile" placeholder="請輸入手機號碼" />
						</div>
						<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
							<label for="continent" class="m-0 col-12 col-sm-4 px-0">取貨門市</label>
							<select name="continent" class="step_store m-0 col-12 col-sm-6 px-0" id="continent">
								<option value="">請選擇取貨門市</option>
								<option value="africa">Africa</option>
								<option value="northamerica">North America</option>
								<option value="southamerica">South America</option>
								<option value="antarctica">Antarctica</option>
								<option value="asia">Asia</option>
								<option value="australia">Australia</option>
								<option value="europe">Europe</option>
							</select>
						</div>
						<p class="py-3 m-0 step_border_top w-100">發票類型</p>
						<div class="d-flex py-2 step_border_top_B row w-100 text-center m-0 cursor_point">
							<div class="Own_num_btn py-1 col-12 col-sm-4 px-0 auto_textcolor ">
								<a class="d-block mx-1 px-2 step_cancel_bgc step_border">個人</a>
							</div>
							<div class="Uniform_num_btn py-1 col-12 col-sm-4 px-0 auto_textcolor cursor_point">
								<a class="d-block mx-1 px-2 step_cancel_bgc step_border">統一編號</a>
							</div>
							<div class="donation_btn py-1 col-12 col-sm-4 px-0 auto_textcolor cursor_point">
								<a class="d-block mx-1 px-2 step_cancel_bgc step_border">捐贈發票</a>
							</div>
						</div>
						<p class="w-100 m-0 py-2 step_border_top_B text-center text-sm-left">依財政部規定，發票已託管，無需開立紙本發票。</p>
						<div class="Uniform_num">
							<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
								<label for="Uniform_num" class="m-0 col-12 col-sm-4 px-0">統一編號</label>
								<input type="text" class=" mx-0 col-12 col-sm-6" id="Uniform_num" name="Uniform_num" placeholder="請輸入統一編號" />
							</div>
						</div>
						<div class="donation">
							<div class="w-100 d-flex py-2 step_border_top_B row m-0 px-0">
								<label for="donation" class="m-0 col-12 col-sm-4 px-0">捐贈單位</label>
								<input type="text" class="mx-0 col-12 col-sm-6" id="donation" name="donation" placeholder="請輸入捐贈單位愛心碼" />
							</div>
						</div>
					</form>
				</div>
				<!------------------------step 3-3------------------------- -->
				<div class="container px-0">
					<div class="row w-100 step_product_bgc_2 m-0 py-4 text-center">
						<div class="row py-2 m-0 col-4">
							<p class="middle_text_2 p-0 mx-0 mb-2 col-12">商品金額</p>
							<p class="total_price middle_text_2 p-0  m-0 col-12"></p>
						</div>
						<div class="row py-2 m-0 col-4">
							<p class="middle_text_2 mx-0 mb-2 p-0 col-12">運費小計</p>
							<p class="select middle_text_2 p-0 m-0 col-12" data-freight="0">尚未選擇</p>
						</div>
						<div class="row py-2 m-0 col-4">
							<p class="middle_text_2 p-0 auto_text_green mx-0 mb-2 col-12">總計</p>
							<p class="totalP middle_text p-0 auto_text_green m-0 col-12">NT1,480</p>
						</div>

						<!-- <div class=" justify-content-md-around justify-content-between d-flex text-center"> -->
						<!-- <div class=" py-2">
									<p class="middle_text_2 p-2"></p>
								</div>
 -->
						<!-- <div class=" py-2">
									<p class="middle_text_2 p-2 m-0">商品金額</p>
									<p class="middle_text_2 p-2">運費小計</p>
									<p class="middle_text_2 p-2 auto_text_green">總計</p>	
								</div>
								<div class=" py-2">
									<p class="total_price middle_text_2 p-2 m-0"></p>
									<p class="select middle_text_2 p-2" data-freight="0">尚未選擇</p>
									<p class="totalP middle_text p-2 auto_text_green">NT1,480</p>	 -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="shopping_step1_btn_block" class="container ">
		<div class="row m-0 d-flex justify-content-around text-center step2_next_box">
			<a href="#" id="" class="d-block py-2 mb-3 step_cancel_bgc step_border auto_textcolor col-5 col-sm-4">繼續購物</a>
			<a href="#" id="step1_next" class="d-block py-2 mb-3 step_cancel_bgc step_border auto_textcolor col-5 col-sm-4">下一步</a>
			<span class="auto_text_yellow col-12"></span>
		</div>
	</div>
	<!-- -----------btn_block_Area------------ -->
	<div id="shopping_step2_btn_block" class="container shopping_step_btn_none">
		<div class="row m-0 d-flex justify-content-around text-center step2_next_box">
			<a href="#" id="" class="d-block py-2 mb-3 step_cancel_bgc step_border auto_textcolor col-5 col-sm-4">返回購物車</a>
			<a href="#" id="step2_next" class="d-block py-2 mb-3 step_cancel_bgc step_border auto_textcolor col-5 col-sm-4">下一步</a>
			<span class="auto_text_yellow col-11 col-md-8 text-right"></span>
		</div>
	</div>


	<div id="shopping_step3-1_btn_block" class="container shopping_step_btn_none">
		<div class="row m-0 d-flex justify-content-around text-center">
			<a href="#" id="step3-1_back" class="step3_back d-block py-2 mb-3 step_cancel_bgc step_bordercol-5 col-sm-4 shopping_step_textcolor text-decoration-none">重選付款方式</a>
			<a id="step3-1_next" class=" step3_next d-block py-2 mb-3 step_cancel_bgc step_border auto_textcolor col-5 col-sm-4">下一步</a>
		</div>
	</div>

	<div id="shopping_step3-2_btn_block" class="container shopping_step_btn_none">
		<div class="row m-0 d-flex justify-content-around text-center">
			<a href="#" id="step3-2_back" class="step3_back d-block py-2 mb-3 step_cancel_bgc step_border col-5 col-sm-4 shopping_step_textcolo text-decoration-none">重選付款方式</a>
			<a id="step3-2_next" class=" step3_next d-block py-2 mb-3 step_cancel_bgc step_border auto_textcolor col-5 col-sm-4">下一步</a>
		</div>
	</div>

	<div id="shopping_step3-3_btn_block" class="container shopping_step_btn_none">
		<div class="row m-0 d-flex justify-content-around text-center">
			<a href="#" id="step3-3_back" class="step3_back d-block py-2 mb-3 step_cancel_bgc step_border shopping_step_textcolor col-5 col-sm-4 text-decoration-none">重選付款方式</a>
			<a href="#" id="step3-3_next" class=" step3_next d-block py-2 mb-3 step_cancel_bgc step_border auto_textcolor col-5 col-sm-4">下一步</a>
		</div>
	</div>
	<!-- -----------btn_block_Area------------ -->


	<!-- <div id="step4_page" class="d-none">
		<div class="container p-2 mt-3 text-center auto_text_green">
			<p class="middle_text p-2 m-0">訂購已完成！可以在會員中心查看訂單資訊囉！</p>
		</div>
		<div class="container mt-2 mb-1 d-flex flex-column align-items-center">
			<div class="step_border row mx-2 step_product_bgc_2 step_payment_spacing">
				<p class="middle_text_2 py-3 pl-4 m-0 w-100">收件人資訊</p>
				<div class="w-100 d-flex py-2 step_border_top row m-0">
					<p class="my-0 mx-4 col-12 col-sm-4">姓名</p>
					<p class="my-0 mx-4 mx-sm-0 col-12 col-sm-6">購買人姓名</p>
				</div>
				<div class="w-100 d-flex py-2 row m-0">
					<p class="my-0 mx-4 col-12 col-sm-4">手機號碼</p>
					<p class="my-0 mx-4 mx-sm-0 col-12 col-sm-6">0911-111-220</p>
				</div>
				<div class="w-100 d-flex py-2 row m-0">
					<p class="my-0 mx-4 col-12 col-sm-4">取貨門市</p>
					<p class="my-0 mx-4 mx-sm-0 col-12 col-sm-6">門市名稱</p>
				</div>
				<div class="w-100 d-flex py-2 row m-0 align-items-center">
					<p class="my-0 mx-4 col-12 col-sm-4">發票類型</p>
					<p class="my-0 mx-4 mx-sm-0 col-12 col-sm-6">統一編號20346851</p>
				</div>
				<div class="w-100 justify-content-md-end d-flex text-center auto_text_green row justify-content-center m-0">
					<div class=" py-2 mx-2">
						<p class="middle_text_2 p-2 m-0">共計Ｘ件商品</p>
					</div>
					<div class=" py-2 mx-2">
						<p class="middle_text_2 p-2 m-0">總計金額$1,480</p>	
					</div>
				</div>
			</div>
			<div class="m-4">
				<a href="" class="d-block py-2 px-5 step_cancel_bgc step_border auto_textcolor">回到首頁</a>
			</div>
		</div>
	</div> -->
</div>
<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
	$("#quantity_cut").click(function() {
		let fieldName = $(this).attr('field')
		let currentVal = parseInt($("#quantity_inside_val").val());
		if (currentVal <= 0) {
			$("#quantity_inside_val").val(0)
		} else {
			$("#quantity_inside_val").val(currentVal - 1)
		}
	})
	$("#quantity_plus").click(function() {
		let fieldName = $(this).attr('field')
		let currentVal = parseInt($("#quantity_inside_val").val());
		if (currentVal >= 20) {
			$("#quantity_inside_val").val(20)
		} else {
			$("#quantity_inside_val").val(currentVal + 1)
		}
	})

	// 案件流程控制
	$(".shopping_step_btn_none").hide()
	$("#mobile_step2_textBox").hide()
	$("#mobile_step3_textBox").hide()
	$("#mobile_step4_textBox").hide()
	$("#step1_next").click(function() {
		$("#shopping_step1_btn_block").hide()
		$("#shopping_step2_btn_block").show()
		$("#step1_page").toggleClass('d-none');
		$("#step2_page").toggleClass('d-none');
		$("#step1_step_box").css({
			"background-image": "url('./img/now_step.svg')"
		})
		$("#step2_step_box").css({
			"background-image": "url('./img/another_step.svg')"
		})
		$("#mobile_step1_circleBox p").css({
			"background-color": '#413E53'
		})
		$("#mobile_step2_circleBox p").css({
			"background-color": '#7165A7'
		})
		$("#mobile_step1_textBox").hide()
		$("#mobile_step2_textBox").show()

		/* Act on the event */
	});

	$("input").click(function() {
		$(this).parent().addClass("panel-active").siblings().removeClass("panel-active")
	})

	function step2_none() {
		$("#shopping_step2_btn_block").hide()
		$("#step2_step_box").css({
			"background-image": "url('./img/now_step.svg')"
		})
		$("#step3_step_box").css({
			"background-image": "url('./img/another_step.svg')"
		})
		$("#step2_page").toggleClass('d-none');
		$("#mobile_step2_circleBox p").css({
			"background-color": '#413E53'
		})
		$("#mobile_step3_circleBox p").css({
			"background-color": '#7165A7'
		})
		$("#mobile_step2_textBox").hide()
		$("#mobile_step3_textBox").show()
	}

	$(".step2_next_box span").hide()
	$("#step2_next").click(function() {
		if ($("#step2_redio_1").hasClass('panel-active') == true) {
			$("#step3-3_page").toggleClass('d-none');
			$("#shopping_step3-3_btn_block").show()
			step2_none()
		}
		if ($("#step2_redio_2").hasClass('panel-active') == true) {
			$("#step3-1_page").toggleClass('d-none');
			$("#shopping_step3-1_btn_block").show()
			step2_none()
		}
		if ($("#step2_redio_3").hasClass('panel-active') == true) {
			$("#step3-2_page").toggleClass('d-none');
			$("#shopping_step3-3_btn_block").show()
			step2_none()
		} else {
			$(".step2_next_box span").show()
			$(".step2_next_box span").append('選擇運送與付款方式')
			// 忘了文字提醒標籤名稱先這樣
		}
	})

	$(".step3_back").click(function() {
		$("#step2_page").toggleClass('d-none');
		$(".step2_next_box").find('span').remove()
		$("#step3-1_page").addClass("d-none")
		$("#step3-2_page").addClass("d-none")
		$("#step3-3_page").addClass("d-none")
		$("#step2_step_box").css({
			"background-image": "url('./img/another_step.svg')"
		})
		$("#step3_step_box").css({
			"background-image": "url('./img/now_step.svg')"
		})
		$("#mobile_step3_circleBox p").css({
			"background-color": '#413E53'
		})
		$("#mobile_step4_circleBox p").css({
			"background-color": '#7165A7'
		})
		$("#mobile_step3_textBox").hide()
		$("#mobile_step4_textBox").show()
		/* Act on the event */
	});

	function step4() {
		$("#step3_step_box").css({
			"background-image": "url('./img/now_step.svg')"
		})
		$("#step4_step_box").css({
			"background-image": "url('./img/another_step.svg')"
		})
		$("#all_shopping_step").hide()
		$("#step4_page").toggleClass('d-none');
		$("#shopping_step3-1_btn_block").addClass('d-none');
		$("#shopping_step3-2_btn_block").addClass('d-none');
		$("#shopping_step3-3_btn_block").addClass('d-none');

		// $("#step3-1_page").addClass('d-none');
		// $("#step3-2_page").addClass('d-none');
		// $("#step3-3_page").addClass('d-none');

		$("#mobile_step3_circleBox p").css({
			"background-color": '#413E53'
		})
		$("#mobile_step4_circleBox p").css({
			"background-color": '#7165A7'
		})
		$("#mobile_step3_textBox").hide()
		$("#mobile_step4_textBox").show()
		/* Act on the event */
	}



	// 發票控制
	$(".Uniform_num").hide()
	$(".donation").hide()
	$(".Own_num_btn").click(function() {
		$(".Uniform_num").hide()
		$(".donation").hide()
		$('.invoice').val('個人')
	})
	$(".Uniform_num_btn").click(function() {
		$(".Uniform_num").show()
		$(".donation").hide()
		$('.invoice').val('統一編號')
	})
	$(".donation_btn").click(function() {
		$(".donation").show()
		$(".Uniform_num").hide()
		$('.invoice').val('捐贈發票')
	})



	function windowSize500(weight500px) {
		if (weight500px.matches) {
			$(".mobile_step_Bigbox").removeClass("w-100") // If media query matches
		} else {
			$(".mobile_step_Bigbox").addClass("w-100")
		}
	}

	var weight500px = window.matchMedia("(max-width: 500px)")
	windowSize500(weight500px) // Call listener function at run time
	weight500px.addListener(windowSize500) // Attach listener function on state changes

	$("html").on('click', '.quantity_cut', function() {
		var numberBox = $(this).next()
		var priceBox = $(this).closest(".cart_quantity_bar").next().find("h4")
		var price = Number(priceBox.attr("data-price"))
		var nowNum = Number($(this).next().val());
		if (nowNum <= 1) {
			nowNum = 1;
			numberBox.val(nowNum);
		} else {
			nowNum -= 1;
			numberBox.val(nowNum);
		}
		var priceVal = price * nowNum + ""
		var priceLen = priceVal.length
		var priceStr1 = priceVal.slice(0, priceLen - 3)
		var priceStr2 = priceVal.slice(priceLen - 3, priceLen)
		priceBox.text("NT" + priceStr1 + "," + priceStr2)
		console.log(priceStr1)
		total()
		totalProduct()
		sid = $(this).attr("data-sid")
		new_qty = Number($(this).next().val())
		qtyModify()
		totalPrice()
	})
	$("html").on('click', '.quantity_plus', function() {
		var numberBox = $(this).prev()
		var priceBox = $(this).closest(".cart_quantity_bar").next().find("h4")
		var price = Number(priceBox.attr("data-price"))
		var nowNum = Number($(this).prev().val());
		if (nowNum >= 20) {
			nowNum = 20;
			numberBox.val(nowNum);
		} else {
			nowNum += 1;
			numberBox.val(nowNum);
		}
		var priceVal = price * nowNum + ""
		var priceLen = priceVal.length
		var priceStr1 = priceVal.slice(0, priceLen - 3)
		var priceStr2 = priceVal.slice(priceLen - 3, priceLen)
		priceBox.text("NT" + priceStr1 + "," + priceStr2)
		total()
		totalProduct()
		sid = $(this).attr("data-sid")
		new_qty = Number($(this).prev().val())
		qtyModify()
		totalPrice()
	})

	function totalProduct() {
		var total_product = 0
		$('.quantity_inside_val').each(function() {
			var qty = Number($(this).val())
			total_product += qty
			$('.total_qty').text('共計' + total_product + '件')
		})
	}
	totalProduct()

	function total() {
		total_price = 0
		$(".cart_product_price").each(function() {
			var qty = $(this).parent().prev().find(".quantity_inside_val").val()
			// console.log(qty)
			var item_total = Number($(this).attr("data-price")) * Number(qty)
			total_price += item_total
			var priceVal = total_price + ""
			var priceLen = priceVal.length
			var priceStr1 = priceVal.slice(0, priceLen - 3)
			var priceStr2 = priceVal.slice(priceLen - 3, priceLen)
			$('.total_price').text("NT" + priceStr1 + "," + priceStr2).attr('data-price', total_price)

		})
	}
	total()

	function qtyModify() {
		$.post('shopping_step_api.php', {
			'sid': sid,
			'qty': new_qty
		}, function(data) {
			console.log(data)
		})
	}

	$('#step2_page input').change(function() {
		var freight = $('#step2_page input:checked').attr('data-freight')
		$('.select').text('NT' + freight).attr('data-freight', freight)
		totalPrice()

	})

	function totalPrice() {
		var finTotal = Number($('.total_price').attr('data-price')) + Number($('.select').attr('data-freight'))

		var finTotalVal = finTotal + ""
		var finTotalLen = finTotalVal.length
		var finTotaStr1 = finTotalVal.slice(0, finTotalLen - 3)
		var finTotaStr2 = finTotalVal.slice(finTotalLen - 3, finTotalLen)
		$('.totalP').text("NT" + finTotaStr1 + "," + finTotaStr2)
	}
	totalPrice()


	$('#step3-3_next').click(function() {
		var product = {}
		$('.product_item').each(function() {
			var product_sid = $(this).attr('data-sid')
			var qty = $(this).find('.quantity_inside_val').val()
			product[product_sid] = qty;
		})
		var address = $('#address_home').val()
		var invoice = $('.invoice').val()
		var totalP = $('.totalP').text()
		var phone = $('#mobile_home').val()
		var total_qty = '<?= count($_SESSION['cart']) ?>'

		var order = {
			'address': address,
			'invoice': invoice,
			'totalP': totalP,
			'product': product,
			'phone': phone,
			'total_qty': total_qty,
		}
		console.log(order)
		$.post('order_list_api.php', order, function(data) {
			if (data.success) {
				location.href = 'shopping_step_finalPage.php';
			} else {
				// alert(data.info)
				swal({
					title: (data.info),
					// text: '您的資料未填妥',
					type: 'warning',
					showConfirmButton: false,
					timer: 1200
				});
			}
		}, "JSON");
	})
</script>


<?php require __DIR__ . '/__html_end.php' ?>