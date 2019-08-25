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
	};
}

?>
<?php include __DIR__ . '/main_page_header.php' ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
	.sweet-alert {
		background-color: #211661;
		border-radius: 0;
		font-family: 'Noto Sans TC', sans-serif;
		padding-top: 30px;
	}

	.sweet-alert h2,
	.sweet-alert p {
		color: #ffffff;
	}

	.sweet-alert[data-has-confirm-button=false][data-has-cancel-button=false] {
		padding-bottom: 0;
	}

	.sweet-alert button.confirm {
		background: #412f8f !important;
		border-radius: 0;
		border: 2px solid #ffffff;
	}
</style>

<div class="container bg-container pl-0 pr-0">
	<!-- -------------show in mobile------------->
	<div class="container-fluid pt-4 mt-4 pl-0 pr-0 d-block d-lg-none">
		<div class="GA_title_mobile mt-3 d-block d-lg-none">
			<p class="middle_text py-2 pl-5">
				購物車
			</p>
		</div>
	</div>
	<!-- ------------------step img ------------------->
	<!---------- show in desktop ------------>
	<div id="step1_page" class="pt-3 mt-5">
		<div class="container ">
			<div class="GA_title_line d-none d-lg-block mt-5"></div>
			<div class="GA_product_title px-3 mb-5 d-none d-lg-block">
				<p class="py-2 px-2">
					購物車
				</p>
			</div>
			<div class="container d-flex flex-column justify-content-center align-items-center  row cart_product_bgc mx-0 mt-3 mb-0 p-5">
				<?php if (empty($rows)) {
					echo '購物車沒東西，快去逛逛吧～～'; ?>
				<?php } else { ?>
				<?php foreach ($rows as $r) : ?>
				<div class="row align-items-center text-center text-sm-left">
					<div class="my-3 col-7 mx-auto mx-sm-0 col-sm-5 col-md-4 col-lg-2">
						<img src="img/product/<?= $r['products_img'] ?>" alt="" class="img-fluid">
					</div>
					<div class="my-2 step_product_information text-white vertical col-10 mx-auto mx-sm-0 col-sm-7 col-md-8 col-lg-5">
						<h4 class="middle_text_2"><?= $r['products_name'] ?></h4>
						<h6 class="middle_text_2">產品類別:<?php switch ($r['products']) {
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
																			?></h6>
						<h6 class="middle_text_2"><?= $r['products_brief'] ?></h6>
					</div>

					<!-- <div class="d-flex align-items-center justify-content-around col-md mb-3"> -->
					<div class="d-flex cart_quantity_bar step_quantity_bar justify-content-center my-3 col-12 col-sm-5 col-md-4 col-lg-2">
						<form action="" class="quantity_form d-flex justify-content-center">
							<input type="button" value="-" class="quantity_cut product_inner_border_green2" data-sid="<?= $r['sid'] ?>" field='quantity'>
							<input type="text" value="<?= $_SESSION['cart'][$r['sid']] ?>" name="quantity" class="quantity_inside_val product_inner_border_green2" readonly>
							<input type="button" value="+" class="quantity_plus product_inner_border_green2" data-sid="<?= $r['sid'] ?>" field='quantity'>
						</form>
					</div>
					<div class="row align-items-center justify-content-around col-12 col-sm-7 col-md-8 col-lg-3 text-center p-3 m-0">
						<h4 class="cart_product_price text-white middle_text my-3 col-8 col-sm-6 col-md-9 col-lg-7 text-md-right text-lg-center" data-price="<?= $r['price_val'] ?>">
							NT<?php
										$price = $r['price_val'] * $_SESSION['cart'][$r['sid']];
										$length = strlen($price);
										$priceFuck = substr_replace($price, ',', $length - 3, 0);

										echo $priceFuck;
										?>
						</h4>
						<a href="shopping_cart_delete_api.php?sid=<?= $r['sid'] ?>" class="m-0 d-block py-1 px-3 cart_cancel_bgc cart_border auto_textcolor col-4 col-sm-6 col-md-3 col-lg-5">取消</a>
					</div>
					<!-- </div> -->
				</div>
				<?php endforeach; ?>
				<?php } ?>
			</div>
			<div class="container d-flex justify-content-center w-100 mb-4 p-0">
				<div class="container d-flex justify-content-around justify-content-sm-end cart_product_bgc_2 py-3">
					<div class="justify-content-md-around justify-content-between d-flex text-center align-items-center">
						<div class=" py-2">
							<p class="m-0 total_qty middle_text_2 p-2"></p>
						</div>
						<div class=" py-2">
							<p class="m-0 middle_text_2 p-2 auto_text_green">總計</p>
						</div>
						<div class=" py-2">
							<p class="total_price middle_text p-2 auto_text_green mt-0 mb-0"></p>
						</div>
					</div>
				</div>
			</div>

			<div class="container mt-3 pt-5">
				<div class="row m-0 d-flex justify-content-around text-center step2_next_box">
					<a href="product_page.php" id="" class="d-block py-2 mb-3 step_cancel_bgc step_border auto_textcolor col-5 col-sm-4">繼續購物</a>
					<?php if (!empty($rows)) : ?>
					<a href="<?= isset($_SESSION['loginUser']) ? 'shopping_step_page.php' : 'javascript:alert_login()' ?>" id="step2_next" class="d-block py-2 mb-3 step_cancel_bgc step_border auto_textcolor col-5 col-sm-4">結帳去</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ----------------------step 1------------------------- -->

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
	function windowSize576px(weight576px2) {
		if (weight576px2.matches) {
			$(".shopping_cart_imgB").addClass("w-50") // If media query matches
		} else {
			$(".shopping_cart_imgB").removeClass("w-50")
		}
	}
	var weight576px2 = window.matchMedia("(max-width: 576px)")
	windowSize576px(weight576px2) // Call listener function at run time
	weight576px2.addListener(windowSize576px) // Attach listener function on state changes


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
		total()
		totalProduct()
		sid = $(this).attr("data-sid")
		new_qty = Number($(this).next().val())
		qtyModify()
		setTimeout(function() {
			calcQtyReload()
		}, 200)
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
		setTimeout(function() {
			calcQtyReload()
		}, 200)
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
			console.log(item_total)
			$('.total_price').text("NT" + priceStr1 + "," + priceStr2)
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

	function alert_login() {
		// alert("請先登入會員");
		swal({
			title: '請先登入會員',
			type: 'warning',
			showConfirmButton: false,
			timer: 1200
		});
		setTimeout(function() {
			location.href = 'login_page.php';
		}, 1250);
	}
</script>
<?php require __DIR__ . '/__html_end.php' ?>