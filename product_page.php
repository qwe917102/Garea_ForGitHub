<?php include __DIR__ . '/__db_connect.php';


$brand = isset($_GET['brand']) ? intval($_GET['brand']) : 0;
$products = isset($_GET['products']) ? intval($_GET['products']) : 0;

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$per_page = 9;
$t_sql = "SELECT COUNT(1) FROM `products_list` ";

$total_rows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$total_pages = ceil($total_rows / $per_page);

if ($page < 1) {
	header('Location: product_page.php');
	exit;
}
if ($page > $total_pages) {
	header('Location: product_page.php');
	exit;
}


$star = ($page - 1) * $per_page;

$sql = "SELECT * FROM `products_list` ORDER BY `brand` ASC, `products` ASC LIMIT $star,$per_page";
$stmt = $pdo->query($sql);

// $sql = "SELECT * FROM `products_list` WHERE 1";
// $stmt = $pdo->query($sql);

?>
<?php include __DIR__ . '/main_page_header.php' ?>
<link rel="stylesheet" href="css/product_page.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
	.sweet-alert {
		background-color: #211661;
		border-radius: 0;
		font-family: 'Noto Sans TC', sans-serif;
		padding-top: 20px;
	}

	/* .sweet-alert h2 {
		font-size: 1.7rem;
	} */

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
<div class="container-fluid p-0 over">
	<div class="w-100 product_bigImg "></div>
	<div class="GA_title_mobile d-block d-lg-none">
		<p class="middle_text py-2 pl-5">
			全部
		</p>
	</div>
</div>





<!----------------------show in mobile ---------------->
<div class="container-fluid parallax_card">
	<div class="container mobile pt-4">

		<p class="product_filter_mobile middle_text py-2 mx-auto m-0 d-block d-lg-none">
			商品篩選
		</p>

		<p class="product_filter_mobile middle_text d-block d-lg-none pb-1 pb-md-2 mb-0 mb-md-0">
			品牌
		</p>
		<div class="filter_brand">
			<div class="product_filter_detail d-block d-lg-none">
				<div class="brand_button_item brandAll">
					<a class="py-2 m-0 d-block active <?= $brand == 0 ? 'active' : "" ?>" href="javascript:loadData({brand:0,page:1})">
						全部
					</a>
				</div>
				<div class="brand_button_item brandC">
					<a class="py-2 m-0 d-block <?= $brand == 1 ? 'active' : "" ?>" href="javascript:loadData({brand:1,page:1})">
						CORSAIR海盜船
					</a>
				</div>
				<div class="brand_button_item brandR">
					<a class="py-2 m-0 d-block <?= $brand == 2 ? 'active' : "" ?>" href="javascript:loadData({brand:2,page:1})">
						RAZER雷蛇
					</a>
				</div>
				<div class="brand_button_item brandL">
					<a class="py-2 m-0 d-block <?= $brand == 3 ? 'active' : "" ?>" href="javascript:loadData({brand:3,page:1})">
						羅技logitechG
					</a>
				</div>
				<div class="brand_button_item brandM">
					<a class="py-2 m-0 d-block <?= $brand == 4 ? 'active' : "" ?>" href="javascript:loadData({brand:4,page:1})">
						msi微星
					</a>
				</div>
				<div class="product_detail_mobile">

				</div>
			</div>
		</div>
		<a class="product_filter_button middle_text mt-4 py-2 mx-auto m-0 d-block d-lg-none">
			細項篩選
		</a>
		<div class="GA_filterBg_mobile d-lg-none">
			<div class="filter_type w-75">
				<div class="product_filter">
					<p class="py-2 m-0">產品</p>
				</div>
				<div class="product_filter_detail">
					<div class="product_button_item productAll">
						<p class="py-2 m-0">
							<a href="javascript:loadData({type:'0',page:1})">
								全部
							</a>
						</p>
					</div>
					<div class="product_button_item productMouse">
						<p class="py-2 m-0">滑鼠</p>
					</div>
					<div class="product_type_item">
						<a class="text-decoration-none py-2 m-0 d-block" href="javascript:loadData({type:'1-1',page:1})">光學滑鼠</a>
						<a class="text-decoration-none py-2 m-0 d-block" href="javascript:loadData({type:'1-2',page:1})">RGB滑鼠</a>
						<a class="text-decoration-none py-2 m-0 d-block" href="javascript:loadData({type:'1-3',page:1})">無線滑鼠</a>
					</div>
					<div class="product_button_item d-flex justify-content-center productKeyboard">
						<p class="py-2 m-0">鍵盤

						</p>
					</div>
					<div class="product_type_item">
						<a class="text-decoration-none py-2 m-0 d-block" href="javascript:loadData({type:'2-1',page:1})">機械式鍵盤</a>
						<a class="text-decoration-none py-2 m-0 d-block" href="javascript:loadData({type:'2-2',page:1})">RGB鍵盤</a>
						<a class="text-decoration-none py-2 m-0 d-block" href="javascript:loadData({type:'2-2',page:1})">無線鍵盤</a>
					</div>
					<div class="product_button_item d-flex justify-content-center productEar">
						<p class="py-2 m-0">耳機

						</p>
					</div>
					<div class="product_type_item">
						<a class="text-decoration-none py-2 m-0 d-block" href="javascript:loadData({type:'3-1',page:1})">頭戴式耳機</a>
						<a class="text-decoration-none py-2 m-0 d-block" href="javascript:loadData({type:'3-2',page:1})">RGB耳機</a>
						<a class="text-decoration-none py-2 m-0 d-block" href="javascript:loadData({type:'3-3',page:1})">無線耳機</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--------------------- show in DECKTOP -------------------------->
<div class="container-fluid parallax_card">
	<div class="container pt-4 d-flex ">
		<div class="GA_filter w-100 d-flex ">
			<div class="col-xl-3 col-lg-3 pr-5 d-none d-lg-block">
				<div class="GA_filter_border">
					<div class="product_filter">
						<p class="py-2 m-0">
							商品篩選
						</p>
					</div>
					<div class="filter_brand">
						<div class="product_filter">
							<p class="py-2 m-0">
								品牌
							</p>
						</div>
						<div class="product_filter_detail">
							<div class="brand_button_item brandAll">
								<a class="py-2 m-0 d-block <?= $brand == 0 ? 'active' : "" ?>" href="javascript:loadData({brand:0,page:1})">
									全部
								</a>
							</div>
							<div class="brand_button_item brandC">
								<a class="py-2 m-0 d-block <?= $brand == 1 ? 'active' : "" ?>" href="javascript:loadData({brand:1,page:1})">
									CORSAIR海盜船
								</a>
							</div>
							<div class="brand_button_item brandR">
								<a class="py-2 m-0 d-block <?= $brand == 2 ? 'active' : "" ?>" href="javascript:loadData({brand:2,page:1})">
									RAZER雷蛇
								</a>
							</div>
							<div class="brand_button_item brandL">
								<a class="py-2 m-0 d-block <?= $brand == 3 ? 'active' : "" ?>" href="javascript:loadData({brand:3,page:1})">
									羅技logitechG
								</a>
							</div>
							<div class="brand_button_item brandM">
								<a class="py-2 m-0 d-block <?= $brand == 4 ? 'active' : "" ?>" href="javascript:loadData({brand:4,page:1})">
									msi微星
								</a>
							</div>
						</div>
					</div>
					<div class="filter_type">
						<div class="product_filter">
							<p class="py-2 m-0">
								產品
							</p>
						</div>
						<div class="product_filter_detail">
							<div class="product_button_item pbi productAll <?= $products == 0 ? 'active' : "" ?>">
								<p class="mb-0">
									<a class="pr-2 py-2 d-block" href="javascript:loadData({type:'0',page:1})">
										全部
									</a>
								</p>
							</div>
							<div class="product_button_item pbi d-flex justify-content-center productMouse <?= $products == 1 ? 'active' : "" ?>">
								<p class="pl-4 py-2 m-0 d-block">
									滑鼠
									<span class="py-2 m-0">
										<i class="fas fa-plus"></i>
									</span>
								</p>
							</div>
							<div class="product_type_item pti">
								<a class="py-2 m-0 d-block text-decoration-none" href="javascript:loadData({type:'1-1',page:1,products:0})">
									光學滑鼠
								</a>
								<a class="py-2 m-0 d-block text-decoration-none" href="javascript:loadData({type:'1-2',page:1,products:0})">
									RGB滑鼠
								</a>
								<a class="py-2 m-0 d-block text-decoration-none" href="javascript:loadData({type:'1-3',page:1,products:0})">
									無線滑鼠
								</a>
							</div>
							<div class="product_button_item pbi d-flex justify-content-center productKeyboard <?= $products == 2 ? 'active' : "" ?>">
								<p class="pl-4 py-2 m-0 d-block">
									鍵盤
									<span class="py-2 m-0">
										<i class="fas fa-plus"></i>
									</span>
								</p>
							</div>
							<div class="product_type_item pti">
								<a class="py-2 m-0 d-block text-decoration-none" href="javascript:loadData({type:'2-1',page:1,products:0})">
									機械式鍵盤
								</a>
								<a class="py-2 m-0 d-block text-decoration-none" href="javascript:loadData({type:'2-2',page:1,products:0})">
									RGB鍵盤
								</a>
								<a class="py-2 m-0 d-block text-decoration-none" href="javascript:loadData({type:'2-3',page:1,products:0})">
									無線鍵盤
								</a>
							</div>
							<div class="product_button_item pbi d-flex justify-content-center productEar <?= $products == 3 ? 'active' : "" ?>">
								<p class="pl-4 py-2 m-0 d-block">
									耳機
									<span class="py-2 m-0">
										<i class="fas fa-plus"></i>
									</span>
								</p>
							</div>
							<div class="product_type_item pti">
								<a class="py-2 m-0 d-block text-decoration-none" href="javascript:loadData({type:'3-1',page:1,products:0})">
									頭戴式耳機
								</a>
								<a class="py-2 m-0 d-block text-decoration-none" href="javascript:loadData({type:'3-2',page:1,products:0})">
									RGB耳機
								</a>
								<a class="py-2 m-0 d-block text-decoration-none" href="javascript:loadData({type:'3-3',page:1,products:0})">
									無線耳機
								</a>
							</div>
						</div>
					</div>
					<div class="filter_price">
						<div class="product_filter">
							<p class="py-2 m-0">
								價格
							</p>
						</div>
						<div class="product_filter_price px-3">
							<div class="product_radio_item ">
								<input type="radio" id="price_all" name="price" value="0" checked>
								<label for="price_all">全部</label>
							</div>
							<div class="product_radio_item ">
								<input type="radio" id="price_2000" name="price" value="1">
								<label for="price_2000">NT0 - NT1,999</label>
							</div>
							<div class="product_radio_item">
								<input type="radio" id="price_4000" name="price" value="2">
								<label for="price_4000">NT2,000 - NT3,999</label>
							</div>
							<div class="product_radio_item">
								<input type="radio" id="price_6000" name="price" value="3">
								<label for="price_6000">NT4,000 - NT5,999</label>
							</div>
							<div class="product_radio_item">
								<input type="radio" id="price_6000up" name="price" value="4">
								<label for="price_6000up">NT6,000↑</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="d-flex col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 flex-column p-0">
				<div class="GA_title_line ml-2 d-none d-lg-block"></div>
				<div class="GA_product_title px-3 ml-2 d-none d-lg-block">
					<p class="py-2 px-4">
						全部
					</p>
				</div>
				<!------------------------- 頁面、價錢(手機) --------------------------------->

				<div class="product_price_mobile d-flex py-2">
					<select class="price_bg d-block d-lg-none" name="price" id="">
						<option name="price" value="0">全部</option>
						<option name="price" value="1">NT0 - NT1,999</option>
						<option name="price" value="2">NT2,000 - NT3,999</option>
						<option name="price" value="3">NT4,000 - NT5,999</option>
						<option name="price" value="4">NT6,000以上</option>
					</select>
					<div class="product_page d-flex">


					</div>
				</div>

				<!-------------------------- product --------------------->
				<!-- <div class="product_xxx d-flex flex-wrap py-2 "> -->
				<div class="product_xxx row py-2 p-0 m-0">
					<!-- 產品位置 -->
				</div>
				<!-- 頁面 -->
				<div class="product_page d-flex align-self-end justify-content-end pb-2">

				</div>
				<!-- 頁面 -->
			</div>
		</div>
	</div>
</div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script src="js/lodash.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
	$('.brand_button_item').click(function() {
		$(this).children().addClass('active')
		$(this).siblings().children().removeClass('active')
		var num = $(this).index();
		$('.brand_button_item').eq(num).children().addClass('active')
		$('.brand_button_item').eq(num).siblings().children().removeClass('active')
	})
	$('.product_button_item').click(function() {
		$(this).addClass('active')
		$(this).siblings('.product_button_item').removeClass('active')
	})
	$('.product_type_item a').click(function() {
		$(this).addClass('active')
		$(this).closest('.product_type_item').siblings('.product_type_item').children().removeClass('active')
		$(this).siblings().removeClass('active')
	})
	$(".pti").hide();
	$('.pbi').click(function() {
		if ($(this).hasClass("productAll")) {
			$(this).siblings(".pti").slideUp()
		}
		$(this).next(".pti").slideToggle()
		$(this).next(".pti").siblings(".pti").slideUp()

		$(this).find('i').toggleClass("fa-minus").toggleClass("fa-plus")
		$(this).siblings('.pbi').find('i').removeClass("fa-minus").addClass("fa-plus")

		var productName = $(this).find('p').text()
		$('.GA_product_title p').text(productName)
		$('.GA_title_mobile p').text(productName)

	})
	// ---------------------------------------------- banner換圖--------------------------------------------------
	var brandName = [
		'url("img/VI/VI_GA.png")',
		'url("img/VI/VI_CORSAIR.png")',
		'url("img/VI/VI_razer.png")',
		'url("img/VI/VI_logitech.png")',
		'url("img/VI/VI_Msi.png")',
	];

	$('.brand_button_item').click(function() {
		var bgImg = $(this).index()
		$('.product_bigImg').css("background-image", brandName[bgImg])
	})

	$('.GA_filterBg_mobile').hide()
	$('.product_filter_button').click(function() {
		$('.GA_filterBg_mobile').fadeIn()
	})
	$('.GA_filterBg_mobile').click(function() {
		// e.preventDefault()
		$(this).fadeOut(1000)
	})
	// ---------------------------------------------- 收藏按鈕--------------------------------------------------		
	$('html').on('click', '.GA_heart', function() {
		var product_sid = $(this).children("a").attr("data-sid")
		$.post('product_like_api.php', {
			sid: product_sid
		}, function(data) {
			if (data.code == 111) {
				$.post('product_like_delete_api.php', {
					sid: product_sid
				}, function(obj) {
					swal({
						title: (obj.info),
						timer: 1200, 
						showConfirmButton: false,
					});
					loadData(params)
				}, "json")
			} else {
				swal({
					title: (data.info),
					timer: 1200,
					// type: 'warning',
					showConfirmButton: false,
				});
				loadData(params)
			}
		}, "json")
	})

	// $('html').on('click', '.GA_heart', function() {
	// 	$(this).toggleClass('like')
	// })



	// ---------------------------------------------- 頁碼lodash--------------------------------------------------
	// var pagination = $('.pageNumber');
	var product_page = $(".product_page");

	var pagination_item_str = `
		<a class="product_link <%= page==i ? 'active' : '' %> text-decoration-none px-2 m-1" href="javascript:loadData({page:<%= i %>})">
			<%= i %>
		</a>`;
	var pagination_item_fn = _.template(pagination_item_str);


	var back_str = `
		<a class="product_pagination back px-2 mx-1 d-block <%= page!==1 ? 'active' : '' %>" href="javascript:loadData({page:<%= page-1 %>})">
			<i class="fas fa-chevron-left"></i>
		</a>`;
	var back_fn = _.template(back_str);

	var front_str = `
		<a class="product_pagination front px-2 mx-1 d-block <%= page!==totalPages ? 'active' : '' %>" href="javascript:loadData({page:<%= page!==totalPages ? page+1 : page %>})">
			<i class="fas fa-chevron-right"></i>
		</a>`;
	var front_fn = _.template(front_str);

	// -----------------------------------------------產品lodash-------------------------------------------------
	var products_container = $(".product_xxx");
	var p_item_str = `
		<div class="d-flex my-2 col-12 col-sm-6 col-md-4 mx-0">
			<div class="row m-0 product_card_border">
				<div id="product_page_GA_heart" class="GA_heart justify-content-end d-flex py-2 col-12 <%= sid==which && belong==member_sid ? "like" : "" %>">
					<a class="px-1" data-sid="<%= sid %>"><i class="<%= sid==which && belong==member_sid ? "fas" : "far" %> fa-heart"></i></a>
				</div>
				<div class="product_img_size p-2 col-12">
					<a class="product_point col-12 d-flex" href="product_inner.php?sid=<%= sid %>">
						<img src="img/product/<%= productsImg %>" class="img-fluid m-0" alt="">
					</a>
					<a class="text-decoration-none product_point" href="product_inner.php?sid=<%= sid %>">
						<p class="more_text_none py-3"><%= productsName %>
						</p>
					</a>
					<p class="more_text_none py-1 m-0"><%= productsBrief %>
					</p>
				</div>
				<div class="row m-0 justify-content-between align-self-end py-3 col-12">
					<div class="col-6 p-0">
						<p class="card_price m-0">NT<%= price %></p>
					</div>
					<div id="" class="col-6 p-0 d-flex justify-content-center">
						<a class="GA_shop px-3 m-0" data-sid="<%= sid %>">
							<i class="fas fa-shopping-cart"></i>
						</a>
					</div>
				</div>
			</div>
		</div>`;



	var p_item_fn = _.template(p_item_str);

	$('html').on('click', '.GA_shop', function() {
		var sid = $(this).attr('data-sid');
		// console.log(sid)
		$.get('shopping_cart_insert_api.php', {
			sid: sid,
			qty: 1
		}, function(data) {
			swal({
				title: (data.info),
				timer: 1200,
				type: 'success',
				showConfirmButton: false,
			});
			setTimeout(function() {
				calcQtyReload()
			}, 200);
			$("#decktop_main_nav").removeClass('active')
		}, 'json');
	});

	// ------------------------------------------------------------------------------------------------

	var params = {
		page: 1,
		brand: 0,
		products: 0,
		type: 0,
		price: 0
	};

	$('.product_radio_item input').change(function() {
		var value = $('.product_radio_item input:checked').val()
		loadData({
			price: value
		})
	})

	$('.price_bg').change(function() {
		var value = $('.price_bg option:selected').val()
		loadData({
			price: value
		})
	})

	function loadData(obj) {

		if (obj.page !== undefined) {
			params.page = obj.page;
		}
		if (obj.brand !== undefined) {
			params.brand = obj.brand;
		}
		if (obj.type !== undefined) {
			params.type = obj.type;
		}
		if (obj.price !== undefined) {
			params.price = obj.price;
		}
		if (obj.products !== undefined) {
			params.products = obj.products;
		}
		if (obj.search !== undefined) {
			params.search = obj.search;
		}


		$.get('product_list_api.php', params, function(data) {
			product_page.html("")
			var totalPages = data.total_pages;
			var page = data.page;

			product_page.append(back_fn({
				page: page,
				totalPages: totalPages
			}))

			for (var k = 1; k <= totalPages; k++) {
				product_page.append(pagination_item_fn({
					i: k,
					page: page,
					totalPages: totalPages
				}))
			}

			product_page.append(front_fn({
				page: page,
				totalPages: totalPages
			}))

			products_container.html("")
			if (data.rows.length == 0) {
				products_container.append('<p class="product_text">此分類目前無商品</p>')
			}
			for (var i = 0; i < data.rows.length; i++) {
				var item = data.rows[i]
				var array = {
					'member_sid': data.member_sid,
					'which': item.which,
					'belong': item.belong,
					'sid': item.sid,
					'productsImg': item.products_img,
					'productsName': item.products_name,
					'productsBrief': item.products_brief,
					'price': item.price,
				}
				products_container.append(p_item_fn(array));
			}
		}, "JSON");
	}



	var brand_img = '<?= $brand ?>'

	switch(brand_img){
		case '0':
		$('.product_bigImg').css('background-image','url("img/VI/VI_GA.png")')
		break;
		case '1':
		$('.product_bigImg').css('background-image','url("img/VI/VI_CORSAIR.png")')
		break;
		case '2':
		$('.product_bigImg').css('background-image','url("img/VI/VI_razer.png")')
		break;
		case '3':
		$('.product_bigImg').css('background-image','url("img/VI/VI_logitech.png")')
		break;
		case '4':
		$('.product_bigImg').css('background-image','url("img/VI/VI_Msi.png")')
		break;
	}

	var myHashChange = function(){
		var hash = location.hash;
		if(hash.length>1){
			hash = hash.slice(1);
			hash = decodeURIComponent(hash);
			loadData({search: hash});
		} else {
			loadData({
				brand: <?= $brand ?>,
				products: <?= $products ?>
			});
		}
	};

	window.addEventListener('hashchange', myHashChange);
	myHashChange();

</script>