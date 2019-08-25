<!doctype html>
<html lang="en">

<head>
	<title>Gaming Area</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="js/vegas/vegas.min.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link rel="stylesheet" href="bootstrap-4.3.1/dist/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/all_css.css?a=<?= uniqid() ?>">

</head>

<body>
	<header class="container-fluid p-0">
		<div class="d-flex justify-content-between">
			<!-- ＾＾＾＾＾＾show in mobile＾＾＾＾＾ -->
			<div id="mobile_main_nav" class="mobile_main_nav d-flex flex-column position-fixed vh-100 auto_bgc m-vw w-65 d-md-none d-xl-none align-items-center">
				<a id="mobile_main_nav_btn" class="d-block align-self-start w-100 pt-4 pl-4 cursor_point "><i class="footer_icon_size fas fa-times auto_textcolor"></i></a>
				<div class="w-50 d-flex justify-content-center pb-3 position-relative">
					<a class="w-100 navbar-brand text-light mr-0 web_logo_mobile" href="main_page.php"><img src="img/GA_mobileLogo.svg" alt=""></a>
				</div>
				<ul id="mobile_list_top" class="navbar-nav align-items-center w-100">

					<?php if (isset($_SESSION['loginUser'])) : ?>
					<li class="nav-item w-100 text-center bordeR_bt_solid_1px_white pb-2">
						<a class="dropdown-item text-white login_nickname" id="my_nickname">Hello！ <?= $_SESSION['loginUser']['nickname'] ?></a>
					</li>
					<li class="nav-item w-100 text-center bordeR_bt_solid_1px_white d-flex justify-content-center pb-2">
						<a class="d-block auto_textcolor ml-2" href="Log_out.php">登出</a>|&nbsp
						<a class="d-block auto_textcolor mr-2" href="member_center_page.php">會員中心</a>
					</li>
					<?php else : ?>
					<li class="nav-item w-100 text-center bordeR_bt_solid_1px_white d-flex justify-content-center pb-2">
						<a class="d-block auto_textcolor mr-2" href="Register_page.php">註冊</a>|&nbsp
						<a class="d-block auto_textcolor ml-2" href="Login_page.php">登入</a>
					</li>
					<?php endif ?>

					<li class="nav-item w-100 text-center bordeR_bt_solid_1px_white">
						<div id="mobile_prduct_list" class="mobile_list_title d-flex justify-content-center py-2 auto_textcolor align-items-center">
							<i class="plus_minus fas fa-plus"></i>
							<div class="d-block cursor_point px-4">產品資訊</div>
							<div class="fa-fw">
								<i class="up_down fas fa-angle-down"></i>
							</div>
						</div>
						<div id="mobile_prduct_list2" class="mobile_list_inner mobile_prduct_list2">
							<a class="d-block auto_textcolor mobile_list_bg_type1 py-2" href="product_page.php">全部產品</a>
							<div id="mobile_prduct_list2-2" class="d-flex mobile_list_title mobile_list_bg_type1 justify-content-center py-2 auto_textcolor align-items-center">
								<i class="plus_minus fas fa-plus"></i>
								<div class="d-block  px-4 cursor_point">品牌區分</div>
								<div class="fa-fw">
									<i class="up_down fas fa-angle-down"></i>
								</div>
							</div>
						</div>
						<div id="mobile_prduct_list3" class="mobile_prduct_list2 mobile_list_inner">
							<a class="d-block auto_textcolor py-2 mobile_list_bg_type2" href="product_page.php?brand=1&products=0">CORSAIR</a>
							<a class="d-block auto_textcolor py-2 mobile_list_bg_type2" href="product_page.php?brand=2&products=0">RAZER</a>
							<a class="d-block auto_textcolor py-2 mobile_list_bg_type2" href="product_page.php?brand=3&products=0">logitechG</a>
							<a class="d-block auto_textcolor py-2 mobile_list_bg_type2" href="product_page.php?brand=4&products=0">MSI</a>
						</div>
					</li>
					<li class="nav-item w-100 text-center bordeR_bt_solid_1px_white">
						<div id="mobile_news_list" class="mobile_list_title d-flex justify-content-center py-2 auto_textcolor align-items-center">
							<i class="plus_minus fas fa-plus"></i>
							<div class="d-block cursor_point px-4">賽事新聞</div>
							<div class="fa-fw">
								<i class="up_down fas fa-angle-down"></i>
							</div>
						</div>
						<div id="mobile_news_list2" class="mobile_news_list2 mobile_list_inner">
							<a class="d-block auto_textcolor py-2 mobile_list_bg_type1" href="News_main_page.php">新聞主頁</a>
							<a class="d-block auto_textcolor py-2 mobile_list_bg_type1" href="News_page.php">資訊新聞</a>
							<a class="d-block auto_textcolor py-2 mobile_list_bg_type1" href="News_page2.php">電競新聞</a>
						</div>
					</li>
					<li class="nav-item w-100 text-center bordeR_bt_solid_1px_white">
						<div id="mobile_game_list" class="mobile_list_title d-flex justify-content-center py-2 auto_textcolor align-items-center">
							<i class="plus_minus fas fa-plus"></i>
							<div class="d-block px-4 cursor_point">電競頻道</div>
							<div class="fa-fw">
								<i class="up_down fas fa-angle-down"></i>
							</div>
						</div>
						<div id="mobile_game_list2" class="mobile_game_list2 mobile_list_inner">
							<a class="d-block auto_textcolor py-2 mobile_list_bg_type1" href="Channel_page.php">電競賽事</a>
							<a class="d-block auto_textcolor py-2 mobile_list_bg_type1" href="Channel_replay_page.php">賽事回顧</a>
						</div>
					</li>
					<li class="nav-item w-100 text-center bordeR_bt_solid_1px_white">
						<a class="d-block auto_textcolor py-2" href="about_page.php">關於我們</a>
					</li>
					<div class="d-flex align-items-center w-100 pt-4 justify-content-center">
						<div class="mx-1 mt-2 text-center cursor_point">
							<a class="w-25" href="http://facebook.com">
								<i class="footer_icon_size fab fa-facebook-square text-white"></i>
							</a>
							<p class="m-0 footer__icon_font_size footer_textcolor">社群分享</p>
						</div>
						<div class="mt-2 mx-1 d-flex flex-column align-items-center justify-content-start cursor_point">
							<div class="w-32">
								<a href="GA_FOX_page.php" class="d-block m-0 w-100 h-100 overflow-hidden pb-1 pt-0">
									<img src="img/fox helper.svg" class="fit-img" alt="">
								</a>
							</div>
							<p class="m-0 footer__icon_font_size footer_textcolor mb-1">選購助手</p>
						</div>
						<div class="mt-2 mx-1 text-center cursor_point">
							<a href="report_page.php">
								<i class="footer_icon_size fas fa-question-circle text-white"></i>
							</a>
							<p class="m-0 footer__icon_font_size footer_textcolor">問題回報</p>
						</div>
					</div>
				</ul>
			</div>
			<!-- ＾＾＾＾＾＾show in mobile＾＾＾＾＾ -->
			<!-- ＾＾＾＾＾＾show in deck＾＾＾＾＾ -->
			<nav id="decktop_main_nav" class="decktop_main_nav navbar navbar-expand-lg navbar-expand-md navbar-light auto_bgc py-0 px-3 flex-xl-shrink-1 justify-content-md-center position-fixed w-100">
				<!-- ＾＾＾＾＾＾show in mobile＾＾＾＾＾ -->
				<div class="d-flex justify-content-between w-100 d-md-none d-xl-none">
					<div class=" d-flex align-items-center">
						<button class="btn mx-1 my-sm-0 border-0 auto_textcolor d-none"><i class="fas fa-angle-double-left"></i></button>
						<div id="main_nav_btn" class="p-2 w-25 auto_textcolor middle_text cursor_point">
							<i class="fas fa-bars auto_textcolor"></i>
						</div>
					</div>

					<a id="moblie_Logo" class="moblie_Logo navbar-brand text-light mr-0 p-0" href="main_page.php"><img src="img/GA_LOGO.svg" alt="" class=""></a>

					<span class="px-1 d-none d-sm-none"></span>
					<div id="mobile_search_shop" class="d-flex py-1 d-flex align-items-center list-unstyled">
						<div class="nav-item w-100 text-center py-0">
							<form class="form-inline my-2 my-lg-0 justify-content-end flex-nowrap">
								<button id="mobile_search" class="mobile_search btn mx-1 my-sm-0 border-0 auto_textcolor" type="submit">
									<i class="fas fa-search my-sm-0"></i>
								</button>
								<input id="mobile_SearchBar" class=" mobile_SearchBar form-control bg-transparent text-white invisible d-none" type="search" placeholder="Search" aria-label="Search">
							</form>
						</div>
						<!-- <button id="mobile_open_search" class="mobile_search btn mx-1 my-sm-0 border-0 auto_textcolor" type="button">
							<i class="fas fa-search my-sm-0"></i>
						</button> -->
						<button id="mobile_search_del" class="mobile_search btn mx-1 my-sm-0 border-0 auto_textcolor" type="button">
							<i class="footer_icon_size fas fa-times auto_textcolor"></i>
						</button>
						<div class="nav-item text-center py-0">
							<a href="shopping_cart_page.php" class="btn my-sm-0 border-0 position-relative">
								<i class="fas fa-shopping-cart text-white px-0"></i>
								<span class="badge badge-pill cart_qty cart_q_m position-absolute"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- ＾＾＾＾＾＾show in mobile＾＾＾＾＾ -->
				<!-- ＾＾＾＾＾＾show in desk＾＾＾＾＾ -->
				<div class="container nav_btn collapse navbar-collapse justify-content-between w-100 d-none d-sm-none position-relative" id="navbarSupportedContent">
					<div class="d-flex w-100 align-items-center">
						<a class="navbar-brand text-light mr-0 w-20" href="main_page.php"><img src="img/GA_LOGO.svg" alt="" class=""></a>
						<ul class="navbar-nav align-items-lg-center align-items-md-center mx-2">
							<li class="nav-item active p-2 ">
								<a id="prduct_btn" class="py-2 deck_top_prduct_btn d-block auto_textcolor big_text" href="product_page.php">產品</a>
							</li>
							<li id="news_btn" class="nav-item dropdown position-relative p-2 ">
								<a class="py-2 d-block auto_textcolor big_text" href="News_main_page.php">新聞</a>
								<div id="news_menu" class="dropdown-menu product_bgc text-center position-absolute deck_top_hover_position m-0 border-0">
									<a class="dropdown-item auto_textcolor" href="News_page.php">資訊新聞</a>
									<a class="dropdown-item auto_textcolor" href="News_page2.php">電競新聞</a>
									<!-- <a class="dropdown-item auto_textcolor" href="">促銷活動</a> -->
								</div>
							</li>
							<li id="chanel_btn" class="nav-item dropdown position-relative p-2 ">
								<a class="py-2 d-block auto_textcolor big_text" href="Channel_page.php">頻道</a>
								<div id="chanel_menu" class="dropdown-menu product_bgc text-center position-absolute deck_top_hover_position m-0 border-0">
									<a class="dropdown-item auto_textcolor" href="Channel_page.php">電競賽事</a>
									<a class="dropdown-item auto_textcolor" href="Channel_replay_page.php">賽事回顧</a>
								</div>
							</li>
							<li class="nav-item p-2">
								<a class="d-block auto_textcolor big_text py-2" href="about_page.php">關於</a>
							</li>
						</ul>
					</div>
					<ul class="navbar-nav align-items-stretch">
						<li class="nav-item">
							<button class="btn mx-1 my-sm-0 border-0 py-3 position-relative" type="submit">
								<a href="shopping_cart_page.php">
									<i class="fa-fw fas fa-shopping-cart text-white"></i>
									<span class="badge badge-pill cart_qty cart_q position-absolute"></span>
								</a>
							</button>
						</li>
						<li id="user_btn" class="nav-item dropdown position-relative">
							<button class="btn py-3 my-sm-0 border-0 auto_textcolor" type="button">
								<i class="fa-fw fas fa-user"></i>
							</button>
							<div id="user_menu" class="dropdown-menu product_bgc border-0 text-center position-absolute deck_top_hover_position plus w-75 m-0">
								<?php if (isset($_SESSION['loginUser'])) : ?>

								<a class="dropdown-item text-white login_nickname" id="my_nickname">Hi！<?= $_SESSION['loginUser']['nickname'] ?></a>
								<a class="dropdown-item auto_textcolor" href="member_center_page.php">會員中心</a>
								<a class="dropdown-item auto_textcolor" href="report_page.php">幫助中心</a>
								<a class="dropdown-item auto_textcolor" href="Log_out.php">登出</a>
								<?php else : ?>

								<a class="dropdown-item auto_textcolor" href="member_center_page.php">會員中心</a>
								<a class="dropdown-item auto_textcolor" href="report_page.php">幫助中心</a>
								<a class="dropdown-item auto_textcolor" href="Login_page.php">登入</a>

								<?php endif ?>
								<!-- <a class="dropdown-item auto_textcolor" href="">會員中心</a>
						<a class="dropdown-item auto_textcolor" href="">幫助中心</a>
						<a class="dropdown-item auto_textcolor" href="Log_out.php">登出</a> -->
							</div>
						</li>
						<li class="nav-item">
							<div class="d-none d-md-block">
								<div id="deck_top_search" class="d-block w-100 justify-content-end">
									<button class="btn mx-1 my-sm-0 border-0 auto_textcolor py-3" type="button">
										<i class="fa-fw fas fa-search"></i>
									</button>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- ＾＾＾＾＾＾show in deck＾＾＾＾＾ -->
			</nav>
			<div id="deck_top_SearchBar" class="pt-3 deck_top_SearchBar d-none d-md-block position-fixed w-100 bg-dark">
				<form action="" class="d-flex p-2 container position-relative">
					<input class=" form-control text-white bg-dark" type="search" placeholder="Search" aria-label="Search">
					<button class="btn my-sm-0 auto_textcolor input_search_btn" type="button">
						<i class="fas fa-search my-2 my-sm-0"></i>
					</button>
				</form>
			</div>
			<div id="deck_top_prduct_hover" class="deck_top_prduct_hover d-none d-md-block position-fixed w-100 d-none d-md-block">
				<div class="product_bgc w-100 deck_top_prduct_hover_back">
					<!-- <div class="w-25 nav_degBox"></div> -->
					<div id="deck_top_prduct_list" class="container d-flex flex-nowrap position-relative">

						<ul class="sectin-ul py-2 ">
							<li class="accordion_item">
								<a class="section-title pt-3 w-10 mx-3" href="#">
									<img src="img/CorsairLogo.svg" alt="" class="fit-image">
								</a>
								<div class="section-content pt-3">
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=1&products=0">全部</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=1&products=1">滑鼠</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=1&products=2">鍵盤</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=1&products=3">耳機</a>
								</div>

							</li>
							<li class="accordion_item">
								<a class="section-title pt-3 w-10 mx-3" href="#">
									<img src="img/RazerLogo.svg" alt="" class="fit-image">
								</a>
								<div class="section-content pt-3">
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=2&products=0">全部</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=2&products=1">滑鼠</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=2&products=2">鍵盤</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=2&products=3">耳機</a>
								</div>
							</li>
							<li class="accordion_item">
								<a class="section-title pt-3 w-10 mx-3" href="#">
									<img src="img/LogLogo.svg" alt="" class="fit-image">
								</a>
								<div class="section-content pt-3">
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=3&products=0">全部</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=3&products=1">滑鼠</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=3&products=2">鍵盤</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=3&products=3">耳機</a>
								</div>
							</li>
							<li class="accordion_item">
								<a class="section-title pt-3 w-10 mx-3" href="#">
									<img src="img/MsiLogo.svg" alt="" class="fit-image">
								</a>
								<div class="section-content pt-3">
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=4&products=0">全部</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=4&products=1">滑鼠</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=4&products=2">鍵盤</a>
									<a class="auto_textcolor d-none px-1 mx-1" href="product_page.php?brand=4&products=3">耳機</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</header>