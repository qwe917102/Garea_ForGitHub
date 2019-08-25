<?php require __DIR__ . '/__db_connect.php';

$page_name = 'main_page';

?>
<?php include __DIR__ . '/main_page_header.php' ?>
<link rel="stylesheet" href="Owl/assets/owl.carousel.min.css">
<link rel="stylesheet" href="Owl/assets/owl.theme.default.min.css">
<div class="container position-relative">
	<div class="container text-white d-flex flex-column justify-content-center justify-content-md-end justify-content-sm-center vh-100 pb-4 vegas_in_textBtn">
		<div class="row text-white d-flex vegas_inner_btn">
			<div class="col-12 text-md-left text-center">
				<div class="mx-2">
					<p class="m-0 big_text">為電競而生,以勝利為前提。</p>
					<p class="m-0 big_text">“Gaming Area”電子競技的最佳領導典範。</p>
				</div>
			</div>
			<div class="about_big_btn col-12 col-md-4">
				<a href="product_page.php" class="auto_textcolor px-2 d-block border-light btn text-md-center w-100 mb-2 mt-3 glow-border">
					<p class=" my-0 p-1 middle_text">查看產品</p>
				</a>
			</div>
		</div>
	</div>
</div>
<div id="vegas_bg" class="vegas_bg vh-100 d-none d-md-block">
</div>
<div id="vegas_bg2" class="vegas_bg vh-100 d-block d-md-none">
</div>
<div class="container-fluid p-0 parallax">
	<div class="container auto_spacing position-relative">
		<div class="mx-4">
			<div class="py-4">
				<h2 class="text-center text_color py-2 m-0">About Gaming Area</h2>
				<h4 class="text-center text_color m-0">關於我們</h4>
			</div>
			<div class="big_text text-center row">
				<p class="py-3 small_text">Gaming Area 為電競產業提供源源不絕的贊助，不僅長期支持台灣電競產業，在今年更與許多國際大廠攜手合作，帶動電競活水;其中包含Razer、MSI、Corsair、Logitech等電競知名品牌。</p>
				<div class="logo_big d-flex justify-content-around mx-auto col-12 col-sm-10 col-md-9 col-lg-6 my-3">
					<div class="col-3 my-2">
						<div class="w-100">
							<img class="fit-image" src="img/CorsairLogo.svg" alt="">
						</div>
					</div>
					<div class="col-3 my-2">
						<div class="w-100">
							<img class="fit-image" src="img/RazerLogo.svg" alt="">
						</div>
					</div>
					<div class="col-3 my-2">
						<div class="w-100">
							<img class="fit-image" src="img/LogLogo.svg" alt="">
						</div>
					</div>
					<div class="col-3 my-2">
						<div class="w-100">
							<img class="fit-image" src="img/MsiLogo.svg" alt="">
						</div>
					</div>
				</div>
				<div class="d-flex pb-4 row">
					<div class="col-12 col-md-6 p-3">
						<img src="img/main_page_esport.jpg" class="main_page_about_esport fit-image" alt="">
					</div>
					<div class="col-12 col-md-6 text-center text-md-left d-flex flex-column">
						<h5 class="text_color m-0 py-3 middle_text_2">Gaming Area 品質的保證</h5>
						<div class="small_text">
							<p>我們擁有豐富的活動推廣及電商行銷執行企劃能力;提供玩家們良好優質的周邊設備，遊玩時有更好的遊戲體驗。</p>
							<p>在Gamiming Area，你絕不會錯過最新的電子競技資訊，你可以看到最即時的賽事直播。</p>
							<p>Gaming Area 不定期推出優惠活動，提供產品選擇的協助，找到適合自己的產品。</p>
						</div>
						<a href="about_page.php" class="auto_textcolor main_ch_btn px-2 d-block border-light text-md-center w-50 mb-2 mt-3 glow-border align-self-center align-self-md-start">
							<p class="my-0 p-1 small_text align-self-end">了解更多</p>
						</a>
					</div>
				</div>
				<!-- <p class=" w-100 m-0 pb-4">[ 為電競而生，以勝利為前提 ]<br>永遠給玩家最好的。</p> -->
			</div>
		</div>
	</div>
</div>
<div class="container-fluid px-0 product_card_bgc parallax_card">
	<div class="main_black_bgc mb-3">
		<h3 class="m-0 text-center text_color py-4">熱銷商品</h3>
	</div>
	<div class="container px-0 py-3">
		<div class="row px-0 mr-2 justify-content-start">
			<a href="#" class="d-flex flex-column col-lg-3 col-sm-6 col-md-4 col-10 px-2 mx-auto mx-sm-0 product_inner_card_text">
				<div class=" m-2 product_inner_card_border col">
					<div class="product_img_size cursor_point">
						<div class="w-100 main_product_card_img_size">
							<img class="fit-image" src="img/product/MSI_mouse/GM40WHITE.png" alt="">
						</div>
						<!-- <ig src="" alt=""> -->
					</div>
					<div class="d-flex flex-column align-items-center py-2 px-2 my-2">
						<h4 class="m-0 middle_text_2 product_name px-3">【msi微星】GM50輕量化RGB電競滑鼠</h4>
						<p class="m-0 small_text">● PMW 3330光學傳感器<br>● 專為FPS射擊遊戲設計<br>● 1600萬色RGB</p>
					</div>
				</div>
			</a>
			<a href="#" class="d-flex flex-column col-lg-3 col-sm-6 col-md-4 col-10 px-2 mx-auto mx-sm-0 product_inner_card_text">
				<div class="m-2 product_inner_card_border col">
					<div class="product_img_size cursor_point">
						<div class="w-100 main_product_card_img_size p-3">
							<img class="fit-image" src="img/product/logitechG_headphone/g431-gallery-1.png.imgw.902.902.png" alt="">
						</div>
						<!-- <ig src="" alt=""> -->
					</div>
					<div class="d-flex flex-column align-items-center py-2 px-2 my-2">
						<h4 class="m-0 middle_text_2 product_name px-3">【logitechG羅技】G431電競耳機</h4>
						<p class="m-0 small_text">● 精心調校的 50 mm 驅動單體<br>● 注入冷卻凝膠的耳墊<br>● 伸縮式單方向麥克風</p>
					</div>
				</div>
			</a>
			<a href="#" class="d-flex flex-column col-lg-3 col-sm-6 col-md-4 col-10 px-2 mx-auto mx-sm-0 product_inner_card_text">
				<div class="m-2 product_inner_card_border col">
					<div class="product_img_size cursor_point">
						<div class="w-100 main_product_card_img_size">
							<img class="fit-image" src="img/product/razer_mouse/Naga-Trinity-Base.png" alt="">
						</div>
						<!-- <ig src="" alt=""> -->
					</div>
					<div class="d-flex flex-column align-items-center py-2 px-2 my-2">
						<h4 class="m-0 middle_text_2 product_name px-3">【RAZER雷蛇】Basilisk 巴塞利斯蛇</h4>
						<p class="m-0 small_text">● 全世界最先進的FPS遊戲滑鼠<br>● 16,000 DPI 5G 光學感測器<br>● 可自訂滾輪阻力<br>● 可拆卸的 DPI 切換鍵</p>
					</div>
				</div>
			</a>
			<a href="#" class="d-flex flex-column col-lg-3 col-sm-6 col-md-4 col-10 px-2 mx-auto mx-sm-0 product_inner_card_text">
				<div class="m-2 product_inner_card_border col">
					<div class="product_img_size cursor_point">
						<div class="w-100 main_product_card_img_size p-3">
							<img class="fit-image" src="img/product/logitechG_mouse/g903.png" alt="">
						</div>
						<!-- <ig src="" alt=""> -->
					</div>
					<div class="d-flex flex-column align-items-center py-2 px-2 my-2">
						<h4 class="m-0 middle_text_2 product_name px-3">【logitechG羅技】G903 無線電競滑鼠</h4>
						<p class="m-0 small_text">● 簡約且經典的人體工學設計<br>● 5顆Hyperesponse按建<br>● 6400 DPI 光學感測器 </p>
					</div>
				</div>
			</a>
			<a href="#" class="d-flex flex-column col-lg-3 col-sm-6 col-md-4 col-10 px-2 mx-auto mx-sm-0 product_inner_card_text">
				<div class="m-2 product_inner_card_border col">
					<div class="product_img_size cursor_point">
						<div class="w-100 main_product_card_img_size">
							<img class="fit-image" src="img/product/corsair_keyboard/K70.png" alt="">
						</div>
						<!-- <ig src="" alt=""> -->
					</div>
					<div class="d-flex flex-column align-items-center py-2 px-2 my-2">
						<h4 class="m-0 middle_text_2 product_name px-3">【CORSAIR海盜船】K70 RGB機械式電競鍵盤</h4>
						<p class="m-0 small_text">● IP32防粗塵，防潑水<br>● CHERRY MX紅軸<br>● 紅色LED背光<br>● 多媒體控制按鍵</p>
					</div>
				</div>
			</a>
			<a href="#" class="d-flex flex-column col-lg-3 col-sm-6 col-md-4 col-10 px-2 mx-auto mx-sm-0 product_inner_card_text">
				<div class="m-2 product_inner_card_border col">
					<div class="product_img_size cursor_point">
						<div class="w-100 main_product_card_img_size p-3">
							<img class="fit-image" src="img/product/logitechG_headphone/g533-gallery-1.png.imgw.902.902.png" alt="">
						</div>
						<!-- <ig src="" alt=""> -->
					</div>
					<div class="d-flex flex-column align-items-center py-2 px-2 my-2">
						<h4 class="m-0 middle_text_2 product_name px-3">【logitechG羅技】G533 無線耳機麥克風</h4>
						<p class="m-0 small_text">● 全天候舒適、史詩級音效<br>● 無線2.4GHz連接<br>● 接收器專用延長基座</p>
					</div>
				</div>
			</a>
			<a href="#" class="d-flex flex-column col-lg-3 col-sm-6 col-md-4 col-10 px-2 mx-auto mx-sm-0 product_inner_card_text">
				<div class="m-2 product_inner_card_border col">
					<div class="product_img_size cursor_point">
						<div class="w-100 main_product_card_img_size">
							<img class="fit-image" src="img/product/MSI_mouse/DS200.png" alt="">
						</div>
						<!-- <ig src="" alt=""> -->
					</div>
					<div class="d-flex flex-column align-items-center py-2 px-2 my-2">
						<h4 class="m-0 middle_text_2 product_name px-3">【msi微星】微星 DS200 砝碼雷射電競滑鼠</h4>
						<p class="m-0 small_text">● 可調配重系統<br>● 可調RGB配光<br>● 多組可自定義按鍵 </p>
					</div>
				</div>
				<a>
					<a href="#" class="d-flex flex-column col-lg-3 col-sm-6 col-md-4 col-10 px-2 mx-auto mx-sm-0 product_inner_card_text">
						<div class="m-2 product_inner_card_border col">
							<div class="product_img_size cursor_point">
								<div class="w-100 main_product_card_img_size">
									<img class="fit-image" src="img/product/razer_headphone/RZ04-02051100-R3M1.png" alt="">
								</div>
								<!-- <ig src="" alt=""> -->
							</div>
							<div class="d-flex flex-column align-items-center py-2 px-2 my-2">
								<h4 class="m-0 middle_text_2 product_name px-3">【RAZER雷蛇】Kraken 北海巨妖</h4>
								<p class="m-0 small_text">● 全天候舒適、史詩級音效<br>● 無線2.4GHz連接<br>● 接收器專用延長基座</p>
							</div>
						</div>
					</a>
					<a href="#" class="d-flex flex-column col-lg-3 col-sm-6 col-md-4 col-10 px-2 mx-auto mx-sm-0 product_inner_card_text">
						<div class="d-none d-md-block d-lg-none">
							<div class="m-2 product_inner_card_border col">
								<div class="product_img_size cursor_point">
									<div class="w-100 main_product_card_img_size">
										<img class="fit-image" src="img/product/razer_keyboard/BlackWidow.png" alt="">
									</div>
									<!-- <ig src="" alt=""> -->
								</div>
								<div class="d-flex flex-column align-items-center py-2 px-2 my-2">
									<h4 class="m-0 middle_text_2 product_name px-3">【RAZER雷蛇】BlackWidow 黑寡婦蜘幻彩版 電競鍵盤</h4>
									<p class="m-0 small_text">● 專為遊戲設計的Razer™綠軸<br>● 約8000萬次按鍵敲擊壽命<br>● 具有約1680萬種Razer Chroma™</p>
								</div>
							</div>
						</div>
					</a>
		</div>
	</div>
</div>
<div class="container-fluid py-2 main_black_bgc">
	<h3 class="text-center text_color">職業隊伍</h3>
	<div class="owl-carousel owl-theme w-100">
		<div class="p-4">
			<a href="https://twitter.com/invgaming">
				<img src="img/Channel/ESport_lol/INVICTUS GAMING.png" class="fit-image" alt="">
			</a>
		</div>
		<div class="p-4">
			<a href="https://twitter.com/megaesportssea">
				<img src="img/Channel/ESport_lol/MEGA ESPORTS.png" class="fit-image" alt="">
			</a>
		</div>
		<div class="p-4">
			<a href="https://twitter.com/teamliquid">
				<img src="img/Channel/ESport_lol/LCS - TEAM LIQUID.png" class="fit-image" alt="">
			</a>
		</div>
		<div class="p-4">
			<!-- <a href="https://zh-tw.facebook.com/FlashWolves"> -->
			<a href="FW_team_massage.php">
				<img src="img/Channel/ESport_lol/FLASH WOLVES .png" class="fit-image" alt="">
			</a>
		</div>
		<div class="p-4">
			<a href="https://twitter.com/fbespor">
				<img src="img/Channel/ESport_lol/1907 FENERBAHÇE ESPOR.png" class="fit-image" alt="">
			</a>
		</div>
		<div class="p-4">
			<a href="https://twitter.com/vegasquadron">
				<img src="img/Channel/ESport_lol/VEGA SQUADRON.png" class="fit-image" alt="">
			</a>
		</div>
		<div class="p-4">
			<a href="https://twitter.com/teamisurus">
				<img src="img/Channel/ESport_lol/ISURUS GAMING.png" class="fit-image" alt="">
			</a>
		</div>
		<div class="p-4">
			<a href="https://twitter.com/g2esports">
				<img src="img/Channel/ESport_lol/G2 ESPORTS.png" class="fit-image" alt="">
			</a>
		</div>
		<div class="p-4">
			<a href="https://twitter.com/intzesports">
				<img src="img/Channel/ESport_lol/INTZ E-SPORTS CLUB.png" class="fit-image" alt="">
			</a>
		</div>
	</div>
</div>
<div class="container">
	<h3 class="text-center text_color my-3">影片資訊</h3>
	<div class="d-flex m-0 row pb-4">
		<div class="main_TV_wall_box col-md-6 my-1 p-2">
			<a href="" class="d-flex main_TV_wall main_TV_wall_img1 w-100 auto_textcolor">
				<div class="main_TV_wall_text p-2 align-self-end bg_dark2 w-100">
					<p class="m-0 middle_text_2">精彩絕倫的決勝戰</p>
					<p class="m-0 small_text">精彩絕倫的決勝戰精彩絕倫的決勝</p>
				</div>
			</a>
		</div>
		<div class="main_TV_wall_box col-sm-6 col-md-3 my-1 p-2">
			<a href="" class="d-flex main_TV_wall main_TV_wall_img2 w-100 auto_textcolor">
				<div class="main_TV_wall_text p-2 align-self-end bg_dark2 w-100">
					<p class="m-0 middle_text_2">精彩絕倫的決勝戰</p>
					<p class="m-0 small_text">精彩絕倫的決勝戰精彩絕倫的決勝</p>
				</div>
			</a>
		</div>
		<div class="main_TV_wall_box col-sm-6 col-md-3 my-1 p-2">
			<a href="" class="d-flex main_TV_wall main_TV_wall_img3 w-100 auto_textcolor">
				<div class="main_TV_wall_text p-2 align-self-end bg_dark2 w-100">
					<p class="m-0 middle_text_2">精彩絕倫的決勝戰</p>
					<p class="m-0 small_text">精彩絕倫的決勝戰精彩絕倫的決勝</p>
				</div>
			</a>
		</div>
		<div class="main_TV_wall_box col-sm-12 col-md-3 my-1 p-2">
			<a href="" class="d-flex main_TV_wall main_TV_wall_img4 w-100 auto_textcolor">
				<div class="main_TV_wall_text p-2 align-self-end bg_dark2 w-100">
					<p class="m-0 middle_text_2">精彩絕倫的決勝戰</p>
					<p class="m-0 small_text">精彩絕倫的決勝戰精彩絕倫的決勝</p>
				</div>
			</a>
		</div>
		<div class="main_TV_wall_box col-sm-6 col-md-3 my-1 p-2">
			<a href="" class="d-flex main_TV_wall main_TV_wall_img5 w-100 auto_textcolor">
				<div class="main_TV_wall_text p-2 align-self-end bg_dark2 w-100">
					<p class="m-0 middle_text_2">精彩絕倫的決勝戰</p>
					<p class="m-0 small_text">精彩絕倫的決勝戰精彩絕倫的決勝</p>
				</div>
			</a>
		</div>
		<div class="main_TV_wall_box col-sm-6 col-md-6 my-1 p-2">
			<a href="" class="d-flex main_TV_wall main_TV_wall_img6 w-100 auto_textcolor">
				<div class="main_TV_wall_text p-2 align-self-end bg_dark2 w-100">
					<p class="m-0 middle_text_2">精彩絕倫的決勝戰</p>
					<p class="m-0 small_text">精彩絕倫的決勝戰精彩絕倫的決勝</p>
				</div>
			</a>
		</div>
	</div>
</div>
<?php include __DIR__ . '/main_page_footer.php' ?>
<script src="Owl/owl.carousel.min .js"></script>
<?php include __DIR__ . '/__script.php' ?>
<script>
	$(document).ready(function() {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			autoplay: true,
			responsive: {
				0: {
					items: 2,
					nav: true
				},
				600: {
					items: 5,
					nav: true
				},
				1000: {
					items: 7,
					nav: true,
					loop: true
				}
			}
		});
		$(".owl-nav").hide()
	});
	// $.scrollingParallax('img/main_galaxy.jpg');
	// $('.parallax').scrollingParallax();
</script>
<?php require __DIR__ . '/__html_end.php' ?>