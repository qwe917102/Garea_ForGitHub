<script>
	$("#vegas_bg").vegas({
		slides: [{
			video: {
				src: [
					'video/We Are Logitech G.mp4',
					// '/videos/video.webm',
					// '/videos/video.ogv'
				],
				loop: true,
				mute: true
			}
		}]
	});
	$("#vegas_bg2").css({
		"opacity" : ".5"
	})
	$("#vegas_bg2").vegas({
		delay: 3000,
    timer: false,
    shuffle: true,
    firstTransition: 'fade',
    firstTransitionDuration: 5000,
    transition: 'slideLeft',
    transitionDuration: 1000,
    slides: [
        { src: 'img/main_msi.jpg' },
        { src: 'img/main_razer.jpg' },
        { src: 'img/main_logitech.jpg' },
        { src: 'img/main_corsair.jpg' }
    ],
    overlay: 'img/overlays/08.png'
});
	//＾＾＾＾＾＾＾＾header-vegas ＾＾＾＾＾＾＾
	var LastScrollTop;
	$(window).scroll(function() {
		let PageHeight = $("body").height()
		let WindowHeight = $(window).height()
		let RealHeight = (PageHeight - WindowHeight)
		let ScrollTop = $(this).scrollTop()
		let WindowPersent = (ScrollTop / RealHeight * 100)
		WindowPersent = Math.round(WindowPersent) + "%"
		console.log(WindowPersent)

		// if(WindowPersent >= 95+"%" || WindowPersent >= 100+"%" ){
		// 	$("footer").css({
		// 		"transform" : 'translateY(0)'
		// 	})
		// }else{
		// 	$("footer").css({
		// 	"transform" : 'translateY(200px)'
		// })
		// }
		if (LastScrollTop < ScrollTop) {
			$("#decktop_main_nav").addClass('active')
			$("#deck_top_prduct_hover").addClass('active')
			$("#deck_top_prduct_hover").css("transform", "translateY(-130px)")
			$("#deck_top_SearchBar").removeClass('active')
		} else {
			$("#decktop_main_nav").removeClass('active')
			$("#deck_top_prduct_hover").removeClass('active')
		}

		LastScrollTop = ScrollTop
	})
	//＾＾＾＾＾＾＾＾scroll funtion ＾＾＾＾＾＾＾


	$("#main_nav_btn").click(function() {
		$("#decktop_main_nav").addClass('active')
		$("#mobile_main_nav").toggleClass('slide_in_right');
		/* Act on the event */
	});
	$("#mobile_main_nav_btn").click(function() {
		$(".mobile_list_title").find(".up_down").removeClass("up_down_rotate")
		$("#decktop_main_nav").removeClass('active')
		$("#mobile_main_nav").toggleClass('slide_in_right');
		$("#mobile_list_top").find(".active_list").removeClass("active_list").slideToggle()
		$("#mobile_list_top").find(".plus_minus").removeClass("fa-minus").addClass("fa-plus")
		/* Act on the event */
	});
	//＾＾＾＾＾＾＾＾deck_top_nav-click funtion＾＾＾＾＾＾＾
	$("#deck_top_search").click(function() {
		$("#deck_top_SearchBar").toggleClass('active');
	});

	$("#mobile_search_del").hide()
	$("#mobile_search").hide()

	function search_del_open() {
		$("#mobile_SearchBar").toggleClass('d-none')
		$("#mobile_SearchBar").toggleClass('invisible')
		$("#mobile_search_shop").toggleClass('w-100')
		$("#mobile_SearchBar").toggleClass('flex-grow-1')
	}

	$("#mobile_open_search").click(function() {
		$(this).hide()
		$("#moblie_Logo").hide()
		$("#mobile_search").show()
		$("#mobile_search_del").show()
		search_del_open()
	})
	$("#mobile_search_del").click(function() {
		$(this).hide()
		$("#moblie_Logo").show()
		$("#mobile_search").hide()
		$("#mobile_open_search").show()
		search_del_open()
	})



	//＾＾＾＾＾＾＾＾search-bar-vissble click funtion＾＾＾＾＾＾＾
	function product_nav() {
		$("#deck_top_prduct_hover").css("transform", "translateY(-130px)")
		$("#deck_top_prduct_hover").removeClass('button-glow')
	}
	$("#news_btn").on({
		mouseenter: function() {
			$("#news_menu").slideDown("fast")
			product_nav()
		},
		mouseleave: function() {
			$('#news_menu').slideUp("fast")
		}
	});
	//＾＾＾＾＾＾＾＾新聞＾＾＾＾＾＾＾
	$("#chanel_btn").on({
		mouseenter: function() {
			$("#chanel_menu").slideDown("fast")
			product_nav()
		},
		mouseleave: function() {
			$('#chanel_menu').slideUp("fast")
		}
	});
	//＾＾＾＾＾＾＾＾頻道＾＾＾＾＾＾＾
	$("#user_btn").on({
		mouseenter: function() {
			$("#user_menu").slideDown("fast")
			product_nav()
			// Handle mouseenter...
		},
		mouseleave: function() {
			$('#user_menu').slideUp("fast")
			// Handle mouseleave...
		}
	});
	// ＾＾＾＾＾＾＾＾會員＾＾＾＾＾＾＾

	$("#prduct_btn").mouseenter(function() {
		$("#news_menu").removeClass('show')
		$("#deck_top_prduct_hover").css("transform", "translateY(65px)")
		$("#deck_top_prduct_hover").addClass('button-glow')
		$("#deck_top_SearchBar").removeClass('active')

	})
	$("#deck_top_prduct_list>ul").mouseleave(function() {
		$("#deck_top_prduct_hover").css("transform", "translateY(-130px)")
		$("#deck_top_prduct_hover").removeClass('button-glow')
	});

	//＾＾＾＾＾＾＾＾drck top nav hover＾＾＾＾＾＾＾

	var section = $(".sectin-ul li")

	function toggleAccordion() {
		section.removeClass('active');
		section.find('.auto_textcolor').addClass('d-none')
		section.find('.auto_textcolor').removeClass('d-block')
		$(this).addClass('active');
		$(this).find('.auto_textcolor').removeClass('d-none')
		$(this).find('.auto_textcolor').addClass('d-block')

	}

	section.on('mouseenter', toggleAccordion);

	// 	$("#news_menu").on('mouseenter mouseleave','.dropdown',function(e){
	//   if (e.type === 'mouseenter')$("#news_menu").addClass('show');
	//   setTimeout(function(){
	//     $("#news_menu").toggleClass('show', $("#news_menu").is(':hover'));
	//     $('[data-toggle="dropdown"]', $("#news_menu")).attr('aria-expanded',$("#news_menu").is(':hover'));
	//   },500);
	// });
	// 	$("#chanel_menu").on('mouseenter mouseleave','.dropdown',function(e){
	//   if (e.type === 'mouseenter')$("#chanel_menu").addClass('show');
	//   setTimeout(function(){
	//     $("#chanel_menu").toggleClass('show', $("#chanel_menu").is(':hover'));
	//     $('[data-toggle="dropdown"]', $("#chanel_menu")).attr('aria-expanded',$("#chanel_menu").is(':hover'));
	//   },500);
	// })


	// ^^^^^^^^^^^^^^^^^^^^^^^^^
	$(".mobile_list_inner").hide()
	// 隱藏內頁選項
	$(".mobile_list_title").click(function() {

		// $(this).parent("li").siblings('li').find(".up_down").css({
		// 	"transform" : 'rotate(0)'
		// })
		if ($(".mobile_list_inner").hasClass("active_list")) {
			$(this).parent("li").siblings('li').find(".active_list").removeClass("active_list").slideToggle("fast")
			$(this).parent("li").siblings('li').find(".plus_minus").removeClass("fa-minus").addClass("fa-plus")
			$(this).parent("li").siblings('li').find(".mobile_list_title").find(".up_down").removeClass("up_down_rotate")
			// 打開該頁其餘隱藏
		}
	})
	$("#mobile_prduct_list").click(function() {
		$(this).toggleClass("active")
		$(this).find(".up_down").toggleClass('up_down_rotate');
		$(this).find(".plus_minus").toggleClass('fa-plus');
		$(this).find(".plus_minus").toggleClass('fa-minus');

		$("#mobile_prduct_list2").toggleClass("active_list")
		$("#mobile_prduct_list2").slideToggle("fast")
		if ($("#mobile_prduct_list3").hasClass("active_list")) {
			$("#mobile_prduct_list3").slideToggle("fast")
			$("#mobile_prduct_list3").removeClass("active_list")
		}
	})
	$("#mobile_prduct_list2-2").click(function() {
		$(this).toggleClass("active")
		$(this).find(".up_down").toggleClass('up_down_rotate');
		$(this).find(".plus_minus").toggleClass('fa-plus');
		$(this).find(".plus_minus").toggleClass('fa-minus');

		$("#mobile_prduct_list2").addClass("active_list")
		$("#mobile_prduct_list3").toggleClass("active_list")
		$("#mobile_prduct_list3").slideToggle("fast")
	})
	$("#mobile_news_list").click(function() {
		$(this).toggleClass("active")
		$(this).find(".up_down").toggleClass('up_down_rotate');
		$(this).find(".plus_minus").toggleClass('fa-plus');
		$(this).find(".plus_minus").toggleClass('fa-minus');

		$("#mobile_news_list2").toggleClass("active_list")
		$("#mobile_news_list2").slideToggle("fast")
	})
	$("#mobile_game_list").click(function() {
		$(this).toggleClass("active")
		$(this).find(".up_down").toggleClass('up_down_rotate');
		$(this).find(".plus_minus").toggleClass('fa-plus');
		$(this).find(".plus_minus").toggleClass('fa-minus');

		$("#mobile_game_list2").toggleClass("active_list")
		$("#mobile_game_list2").slideToggle("fast")
	})
	// document.querySelector('.next-button').onclick = function () {
	//   // get slider info
	//   var info = slider.getInfo(),
	//       indexPrev = info.indexCached,
	//       indexCurrent = info.index;

	//   // update style based on index
	//   info.slideItems[indexPrev].classList.remove('active');
	//   info.slideItems[indexCurrent].classList.add('active');
	// };
	function calcQty(cart_data) {
		var sum = 0;
		for (let s in cart_data) {
			sum += cart_data[s];
		}
		if (sum != 0) {
			$('.cart_qty').text(sum);
		}
	}

	function calcQtyReload() {
		$.get('shopping_cart_insert_api.php', function(data) {
			calcQty(data.getData);
			// console.log(data.getData)
		}, 'json');
	}
	calcQtyReload()

	$('.input_search_btn').click(function() {
		var inp = $(this).prev();

		// console.log('inp.val(): ', inp.val());

		if (location.href.indexOf('product_page.php') > 0) {
			location.href = '#' + inp.val();
		} else {
			location.href = 'product_page.php#' + inp.val();
		}

		//loadData({search: inp.val()});
	});

	// Back To Top
	$("body").append(
		'<a href="javascript:void(0);" id="fixedTop"><i class="fas fa-arrow-up"></i></a>'
	);

	var fixedTop = $("#fixedTop");
	fixedTop.on("click", function() {
		$("html, body").animate({
			scrollTop: 0
		}, 700);
	});

	$(window).on("load scroll resize", function() {
		var showTop = 100;
		if ($(window).scrollTop() > showTop) {
			fixedTop.fadeIn("normal");
		} else {
			fixedTop.fadeOut("normal");
		}
	});
</script>