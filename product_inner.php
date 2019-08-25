<?php include __DIR__ . '/__db_connect.php';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$member = isset($_SESSION['loginUser']) ? intval($_SESSION['loginUser']['sid']) : 0;

$sql = "SELECT `products_list`.*,`product_brand`.`brand_name`,`brand_img` FROM `products_list` JOIN `product_brand` ON `product_brand`.`sid`=`products_list`.`brand` WHERE `products_list`.`sid` = $sid ";
$stmt = $pdo->query($sql);
$row = $stmt->fetch();

$sql_h = "SELECT `products_list`.*,`product_like`.`belong`,`which` FROM `products_list` JOIN `product_like` ON `products_list`.`sid`=`product_like`.`which` WHERE `products_list`.`sid` = $sid ";
$stmt_h = $pdo->query($sql_h);
$row_h = $stmt_h->fetch();


$sql_r = "SELECT * FROM `products_list` ORDER BY RAND() LIMIT 4";
$stmt_r = $pdo->query($sql_r);
$row_r = $stmt_r->fetchAll();

$img_detail = explode(',', $row['img_detail']);
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
		padding-bottom: 20px;
	}

	.sweet-alert button.confirm {
		background: #412f8f !important;
		border-radius: 0;
		border: 2px solid #ffffff;
	}
</style>

<div class="container d-none d-sm-none d-md-block p-0">
	<div class="d-flex justify-content-around pt-5 mt-5 w-100 row mr-2">
		<div class="product_inner_slider w-50 d-flex align-items-center flex-column col-7">
			<section id="product-slider" class="row  flex_same_h product_inner_all_slider">
				<div class="d-flex flex-column align-items-center col-4">
					<div class="product_inner_logo w-75 my-3">
						<img src="img/<?= $row['brand_img'] ?>" class="fit-image" alt="2">
					</div>
					<nav id="navigation" class="product_inner_nav_slider text-center ">

						<div id="arrows" class="product_inner_arrows">
							<div class="arrow more_down w-100" id="more_down">
								<i class="fas fa-angle-down"></i>
							</div>

							<div class="arrow more_up w-100" id="more_up">
								<i class="fas fa-angle-up"></i>
							</div>
						</div>


						<div id="product_inner_nav_images" class="product_inner_nav_images p-0 w-100">
							<?php foreach ($img_detail as $r => $img) : ?>
							<div class="product_inner_nav_item">
								<img src="img/product/<?= $img ?>" class="fit-image">
							</div>
							<?php endforeach; ?>
							<!-- <li class="product_inner_nav_item"><img src="img/product/MSI_mouse/DS B1.png" class="fit-image" alt="2"></li>
						      <li class="product_inner_nav_item"><img src="img/product/MSI_mouse/GM10.png" class="fit-image" alt="3"></li>
						      <li class="product_inner_nav_item"><img src="img/product/MSI_mouse/GM10.png" class="fit-image" alt="4"></li>
						      <li class="product_inner_nav_item"><img src="img/product/MSI_mouse/GM10.png" class="fit-image" alt="5"></li> -->
						</div>
					</nav>
				</div>

				<div class="product_inner_main_pic col-8 p-0 d-flex flex-column align-items-center justify-content-center p-4">
					<img id="product_inner_main_pic" src="img/product/<?= $row['products_img'] ?>" class="img-fluid ml-2 mb-2 " alt="">
				</div>
				<!-- 
					  <div id="slider" class="product_inner_nav_slider2 w-50">
					    <ul id="slides" class="product_inner_slides d-flex mt-3">

					      <li class="slide w-50"><img src="img/product/MSI_mouse/GM40WHITE.png" class="w-100" alt="1"></li>
					      <li class="slide w-50"><img src="img/product/MSI_mouse/DS B1.png" class="w-100" alt="2"></li>
					      <li class="slide w-50"><img src="img/product/MSI_mouse/GM10.png" class="w-100" alt="3"></li>
					      <li class="slide w-50"><img src="img/product/MSI_mouse/GM10.png" class="w-100" alt="4"></li>
					      <li class="slide slid w-50"><img src="img/product/MSI_mouse/GM10.png" class="w-100" alt="5"></li>
				    	</ul>
				    	<span class="p-1 h-100"></span>
				  	</div>
 -->
			</section>
		</div>
		<div class="col-5 p-0">
			<div class="ml-3 pt-5 w-100">
				<p class="w-100 auto_text_green big_text m-0"><?= $row['products_name'] ?></p>
				<p class="auto_text_yellow big_text product_inner_price_border py-2 m-0">NT$<?= $row['price'] ?></h3>
					<div class="w-100 small_text py-2 product_inner_border">
						<p class="m-0">品牌名稱：<?= $row['brand_name'] ?></p>
						<p class="m-0">結帳方式：信用卡/貨到付款/宅配取貨</p>
						<p class="m-0">保固資訊：最低保固兩年</p>
					</div>
					<div class="w-100 auto_text_green middle_text_2 d-flex my-2">
						數量：
						<form action="" class="quantity_form d-flex justify-content-center mx-3">
							<input id="quantity_cut" type="button" value="-" class="quantity_cut product_inner_border_green2" field='quantity'>
							<input type="text" value="1" name="quantity" class="quantity_inside_val product_inner_border_green2" readonly>
							<input id="quantity_plus" type="button" value="+" class="quantity_plus product_inner_border_green2" field='quantity'>
						</form>
					</div>
					<div class="w-100">
						<a href="#" class="Go_inTo_Cart text-decoration-none d-block p-3 text-center step_payment_spacing product_inner_border_green bg-transparent" data-sid="<?= $row['sid'] ?>">
							<p class="m-0 middle_text_2 text-white">放入購物車<i class="fas fa-shopping-cart"></i></p>
						</a>
						<div class="d-flex">
							<a href="#" class="p-3 mt-2 mr-1 w-50 text-center text-decoration-none product_inner_my_favorite" data-sid="<?= $row['sid'] ?>">
								<p class="m-0 middle_text_2 GA_heart <?= $row_h['sid'] == $row_h['which'] && $row_h['belong'] == $member ? "like" : "" ?>">收藏
									<i class="<?= $row_h['sid'] == $row_h['which'] && $row_h['belong'] == $member ? "fas" : "far" ?> fa-heart"></i>
								</p>
							</a>
							<a href="#" class="p-3 mt-2 ml-1 w-50 text-center text-decoration-none product_inner_share_friend">
								<p class="m-0 middle_text_2 text-white">Share<i class="fab fa-facebook-f"></i></p>
							</a>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

<div class="container d-none d-sm-none d-md-block p-0">
	<div class="tabs mt-5 w-100">
		<div class="product_inner_tab_button_outer">
			<ul class="product_inner_tab_button" id="product_inner_tab_button">
				<li><a href="#product_inner_tab01">關於產品</a></li>
				<li><a href="#product_inner_tab02">規格細項</a></li>
				<li><a href="#product_inner_tab03">商品Ｑ＆Ａ</a></li>
			</ul>
		</div>
		<div id="product_inner_tab01" class="product_inner_tab_contents product_inner_tab01">
			<div class="w-100 pt-3 ">
				<img src="img/product/<?= $row['products_special'] ?>" class="fit-image" alt="">
			</div>
			<div class="mx-auto">
				<img src="img/<?= $row['products_special2'] ?>" alt="">
			</div>

		</div>
		<div id="product_inner_tab02" class="product_inner_tab_contents product_inner_tab02">
			<div class="w-100">
				<img src="img/<?= $row['products_specification'] ?>" class="fit-image" alt="">
			</div>
		</div>
		<div id="product_inner_tab03" class="product_inner_tab_contents product_inner_tab02">
			<div class="q_and_a row mx-auto d-flex mt-4 mb-2">

				<div class="accordion col-12 px-0 px-md-5" id="accordionQuestion">
					<div class="card">
						<div class="card-header" id="headingOne">
							<button type="button" class="btn btn-link text-white text-decoration-none col d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne">
								<p class="mb-0">訂單問題</p>
								<i class="fa fa-plus"></i>
							</button>
						</div>
						<div id="collapseOne" class="collapse show collapse_textcolor text-white" aria-labelledby="headingOne" data-parent="#accordionQuestion">
							<div class="card-body text-left ml-3">
								<p>Q1、如何確認所購買的商品訂單是否成立?</p>
								<br>
								<p>A、請您登入帳號後，進入會員中心:選擇訂單相關-訂單查詢，即可查詢訂單明細</p>
								<div class="dash_line mt-3 p-0 mb-3"></div>
								<p>Q2、如何查詢我的訂單資料呢？</p>
								<br>
								<p>A、請登入本站後，於「會員中心」的「訂單相關」，即可查詢到已成立的訂單資訊。</p>
								<div class="dash_line mt-3 p-0 mb-3"></div>
								<p>Q3、訂購時忘了加購商品，請問可以再追加嗎？</p>
								<br>
								<p>A、未完成付款者，請重新訂購即可。但已付款者，因受限銀行系統及作業規定，請恕無法再行追加，此時請至本網站另行添購。</p>
							</div>
						</div>
					</div>
				</div>

				<div class="accordion col-12 px-0 px-md-5" id="accordionQuestion01">
					<div class="card">
						<div class="card-header" id="headingTwo">
							<button type="button" class="btn btn-link text-white text-decoration-none col d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseTwo">
								<p class="mb-0">付款問題</p>
								<i class="fa fa-plus"></i>
							</button>
						</div>
						<div id="collapseTwo" class="collapse collapse_textcolor text-dark" aria-labelledby="headingTwo" data-parent="#accordionQuestion01">
							<div class="card-body text-left ml-3">
								<p>Q1、請問付款方式有哪些？有匯款、貨到付款、支票和現金嗎？</p>
								<br>
								<p>A、本站付款方式為「信用卡」、「貨到付款」、「超商取貨付款」。目前尚無臨櫃匯款、支票和現金等方式。</p>
								<div class="dash_line mt-3 p-0 mb-3"></div>
								<p>Q2、VISA金融卡(Visa Debit)可以使用「信用卡分期」付款嗎？</p>
								<br>
								<p>A、VISA金融卡(Visa Debit)刷卡時即時由存款帳戶扣款，而信用卡則是先消費後付款，兩者的付款概念不同，因此VISA金融卡無法使用「信用卡分期」付款。</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="container d-none d-sm-none d-md-block">
	<p class="m-0 porduct_inner_another_text middle_text p-3">其他相似商品</p>
</div>
<!-- ---------deck top---------- -->
<div class="container mt-5 pt-5 d-block d-md-none">
	<div class="row m-0">
		<div class="row m-0 justify-content-center col-12">
			<div class="m-3 d-flex justify-content-center ">
				<div id="product_inner_nav_item" class="product_inner_nav_item product_inner_mobile_product col-10 p-0">
					<div id="product_inner_after" class="product_inner_after card_price middle_text col-12">
						<span class="small_text py-3 pr-3 mb-3 after_inner_text">
							<p class="m-0">結帳方式：信用卡/貨到付款/宅配取貨</p>
							<p class="m-0">保固資訊：最低保固兩年</p>
							<p class="m-0">規格細項：</p>
							<p class="m-0">LIGHTING EFECTS：RGB</p>
							<p class="m-0">CABLE：2.0m Braided</p>
							<p class="m-0">LED LIGHT：Side Bar/GA LED</p>
							<p class="m-0">OPERATING TYPE：Windows 10/8.1/8/7/Vista/XP</p>
						</span>
					</div>
					<div class="row p-4">
						<img src="img/product/<?= $row['products_img'] ?>" alt="1" class="img-fluid col-12 p-4">
					</div>
				</div>
			</div>
		</div>
		<p class="col-12 pt-3 my-2 auto_text_green big_text text-center">
			<?= $row['products_name'] ?>
		</p>
		<div class="row m-0 justify-content-between align-items-center py-2 col-12">
			<p class="m-0 big_text card_price col-5 text-center">
				NT$<?= $row['price'] ?>
			</p>
			<div class="row mx-0 col-7 auto_text_green middle_text_2 d-flex align-items-center justify-content-center my-2">
				<p class="m-0 px-0 col-5">數量：</p>
				<form action="" class="quantity_form d-flex justify-content-center m-0 col-7">
					<input type="button" value="-" class="quantity_cut product_inner_border_green2" field='quantity'>
					<input type="text" value="1" name="quantity" class="quantity_inside_val product_inner_border_green2" readonly>
					<input type="button" value="+" class="quantity_plus product_inner_border_green2" field='quantity'>
				</form>
			</div>
		</div>
		<div class=" row px-3 py-2 justify-content-center m-0 col-12">
			<a href="/" class="product_inner_mobile_btn_bg product_inner_Three_color py-2 px-0 mx-1 text-center text-decoration-none product_inner_border_green col-3" data-sid="<?= $row['sid'] ?>">
				<p class="m-0 middle_text_2 w-100">收藏</p>
			</a>
			<a href="#" class="Go_inTo_Cart product_inner_mobile_btn_bg product_inner_Three_color py-2 px-0 mx-1 text-decoration-none d-block text-center product_inner_border_green col-4" data-sid="<?= $row['sid'] ?>">
				<p class="m-0 middle_text_2 w-100">放入購物車</p>
			</a>
			<a href="#" class="product_inner_mobile_btn_bg product_inner_Three_color py-2 px-0 mx-1 text-decoration-none d-block text-center product_inner_border_green col-3">
				<p class="m-0 middle_text_2 w-100">分享</p>
			</a>
		</div>
	</div>
</div>
<div class="container-fluid d-none d-block d-md-none product_inner_my_favorite my-4">
	<div class="container">
		<p class="m-0 middle_text p-3">其他相似商品</p>
	</div>
</div>

<!-- -----------mobile---------- -->
<div class="container">
	<div class="row text-white pb-1">
		<?php foreach ($row_r as $r) : ?>
		<div class="d-flex col-lg-3 col-sm-6 col-md-4 col-10 mx-auto mx-sm-0">
			<div class="row m-2 product_inner_card_border flex_same_h">
				<div class="d-flex align-items-center product_point product_img_size cursor_point px-3 my-3 col-12">
					<img class="img-fluid p-2" src="img/product/<?= $r['products_img'] ?>" alt="">
				</div>
				<div class="py-2 px-2 col-12">
					<h4 class="m-0 middle_text_2 product_name"><?= $r['products_name'] ?></h4>
					<p class="m-0 small_text product_name more_text_none"><?= $r['products_brief'] ?></p>
				</div>
				<div class="row m-0 col-12 d-flex justify-content-around align-items-center py-3 px-2">
					<div class="col-12">
						<h3 class="m-0 big_text card_price">NT<?= $r['price'] ?></h3>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>
<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
	var $numberOfBullets = $(".product_inner_nav_item")
	var $numberOfSlides = $(".slide");

	var counter = 0;

	function checkCounter() {
		if (counter == 0) {
			$("#more_up").css({
				"display": "none"
			});
			// $("#more_down").css({"display":"block"});
		} else if (counter == 3) {
			$("#more_down").css({
				"display": "none"
			});
			// $("#more_up").css({"display":"block"});
		} else {
			$("#more_up").css({
				"display": "block"
			});
			$("#more_down").css({
				"display": "block"
			});
		}
	}

	$(document).ready(function() {

		/// MOVING SMALL SLIDES
		$("#more_down").click(function() {
			$("#product_inner_nav_images").css({
				"top": "-90" * ++counter,
				"transition": "1s"
			});
			checkCounter();
		});
		$("#more_up").click(function() {
			$("#product_inner_nav_images").css({
				"top": "-90" * --counter,
				"transition": "1s"
			});
			checkCounter();
		});

	});

	$(".product_inner_nav_images .product_inner_nav_item").click(function() {
		let imgLink = $(this).find("img").attr("src")
		$("#product_inner_main_pic").attr("src", imgLink)

	})

	$(function() {
		var $tabButtonItem = $('#product_inner_tab_button li'),
			// $tabSelect = $('#tab-select'),
			$tabContents = $('.product_inner_tab_contents'),
			activeClass = 'is-active';

		$tabButtonItem.first().addClass(activeClass);
		$tabContents.not(':first').hide();

		$tabButtonItem.find('a').on('click', function(e) {
			var target = $(this).attr('href');

			$tabButtonItem.removeClass(activeClass);
			$(this).parent().addClass(activeClass);
			// $tabSelect.val(target);
			$tabContents.hide();
			$(target).show();
			e.preventDefault();
		});
	});

	$("#product_inner_nav_item").click(function() {
		$('#product_inner_after').toggleClass('active')
		/* Act on the event */
	});
	$('.favorite_btn').click(function() {
		if ($(this).find('i').hasClass('far')) {
			$(this).find('i').attr('class', 'fas fa-heart')
		} else {
			$(this).find('i').attr('class', 'far fa-heart')
		}
	})



	$(".quantity_cut").click(function() {
		let fieldName = $(this).attr('field')
		let currentVal = parseInt($(".quantity_inside_val").val());
		if (currentVal <= 1) {
			$(".quantity_inside_val").val(1)
		} else {
			$(".quantity_inside_val").val(currentVal - 1)
		}
	})
	$(".quantity_plus").click(function() {
		let fieldName = $(this).attr('field')
		let currentVal = parseInt($(".quantity_inside_val").val());
		if (currentVal >= 20) {
			$(".quantity_inside_val").val(20)
		} else {
			$(".quantity_inside_val").val(currentVal + 1)
		}
	})
	$('.Go_inTo_Cart').click(function() {
		var product_sid = $(this).attr('data-sid')
		var qty = $('.quantity_inside_val').val()
		$.get('shopping_cart_insert_api.php', {
			sid: product_sid,
			qty: qty
		}, function(data) {
			swal({
				title: (data.info),
				timer: 1200,
				showConfirmButton: false,
			});
			setTimeout(function() {
				calcQtyReload()
			}, 200)
		}, 'json')
	})
	$('.product_inner_my_favorite').click(function() {
		var p_sid = $(this).attr("data-sid")
		$.post('product_like_api.php', {
			sid: p_sid
		}, function(data) {
			if (data.code == 111) {
				$.post('product_like_delete_api.php', {
					sid: p_sid
				}, function(obj) {
					swal({
						title: (obj.info),
						timer: 1200,
						showConfirmButton: false,
					});
					setTimeout(function() {
						location.href = 'product_inner.php?sid=<?= $row['sid'] ?>'
					}, 1200)
				}, "json")
			} else {
				swal({
					title: (data.info),
					timer: 1200,
					showConfirmButton: false,
				});
				setTimeout(function() {
					location.href = 'product_inner.php?sid=<?= $row['sid'] ?>'
				}, 1200)
			}
		}, "json")
	})
</script>
<?php require __DIR__ . '/__html_end.php' ?>