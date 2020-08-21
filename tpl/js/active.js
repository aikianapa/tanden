"use strict";

var siteinit = function() {
	/* Full Screen Banner */
	var w = $(window);
	var banner = $("#banner");

/*	$(banner).height($(window).height() - 70);
	$(w).on('resize', function() {
		$(banner).height($(window).height() - 70);
	});
*/

	$('body').scrollspy({
		target: '#navigation',
		offset: 160
	});

	if (document.location.hash) {
		$('html , body').stop().animate({
			scrollTop: $(document.location.hash).offset().top
		}, 1200);
	}


	/* Single Page Navigation */
	$(document).on('click', "#navigation ul li a, .smoth-menu, .slicknav_nav a", function(e) {
		var div = $(this).attr("href");
		if (div === "#") {
			$('html , body').stop().animate({
				scrollTop: 0
			}, 1200);
		} else {
			div = div.split("#");
			if (div.length > 1) {
				div = "#" + div[1];
				$('html , body').stop().animate({
					scrollTop: $(div).offset().top - 56
				}, 1200);
			}
		}

		e.preventDefault();

	});


	$('#navigation ul').slicknav({
		prependTo: '#header',
		label: "",
		closeOnClick: true
	});

	//fixed header;
	$(w).on('scroll', function() {
		var header = $("#header");
		var logo = $("#logo > h4");
		var sliknav = $(".slicknav_menu");

		if ($(this).scrollTop() > 0) {
			$(header).css("min-height", "70px");
			$(header).css("padding-top", "0px");
			$(sliknav).css("top", "16px");

		} else {
			$(header).css("min-height", "80px");
			$(header).css("padding-top", "5px");
			$(sliknav).css("top", "20px");
		}


		//Skill Bar
		var skill = $('#skills');
		if ($(skill).length) {

			if (elementScrolled(skill)) {
				$(".skill-value").each(function() {
					$(this).css("width", $(this).attr("data-percent") + "%");
				});
			}

		}

		//Show Scroll Top Button
		if ($(this).scrollTop() > 300) {
			$(scrolltop_btn).css("display", "block");
		} else {
			$(scrolltop_btn).css("display", "none");
		}

	});



	/* Skill Counter */
	$('.counter').counterUp({
		delay: 100,
		time: 4000
	});


	/* Team Carousel */
	$('#team-carousel').owlCarousel({
		loop: true,
		margin: 10,
		responsiveClass: true,
		//dots:false,
		onChanged: function() {
			wbapp.lazyload();
		},
		autoplay: true,
		nav: false,
		navText: ["", ""],
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 3,
			},
			1000: {
				items: 4,
			}
		}
	});

	/* Client Carousel */
	$('#client-carousel').owlCarousel({
		loop: true,
		items: 1,
		responsiveClass: true,
		autoplay: true,
		margin: 10,
		nav: true,
		navText: ["", ""],
		smartSpeed: 600,
		onChanged: function() {
				wbapp.lazyload();
			},
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});

	/* Work Section */
	var main, title, title_text, len, timer, links;

	$(".single-item").on('mouseenter', function() {
		main = $(this);
		title = $(main).find(".title");
		links = $(main).find(".links");
		title_text = title.html();

		if (title_text == null) {
			len = 0;
		} else {
			len = title_text.length;
		}

		title.html("<span class='blinking-cursor'>|</span>");
		title.css("color", "#FFF");
		var i = 0;

		timer = setInterval(function() {

			if (i < len) {
				$(title).append(title_text.charAt(i));
				i++;
			} else {
				links.css("opacity", "1");
				clearInterval(timer);
			}
		}, 150);


	});

	$(".single-item").on('mouseleave', function() {
		title.html(title_text);
		title.css("color", "transparent");
		links.css("opacity", "0");
		clearInterval(timer);
	});


	/* Scroll Top Button Enabled */
	var scrolltop_btn = $(".scrolltop");
	if ($(this).scrollTop() > 300) {

		$(scrolltop_btn).css("display", "block");

	}

	function elementScrolled(elem) {
		var docViewTop = $(w).scrollTop();
		var docViewBottom = docViewTop + $(w).height();
		var elemTop = $(elem).offset().top + 112;
		return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
	}

	/* Content Slider Section */
	$('#content-slider').owlCarousel({
		loop: true,
		items: 1,
		responsiveClass: true,
		autoplay: true,
		margin: 10,
		dots: true,
		nav: true,
		onChanged: function() {
				wbapp.lazyload();
		},
		navText: ["", ""],
		smartSpeed: 600,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});

	$("#content-slider").on("translate.owl.carousel", function() {
		$(".banner-heading").removeClass("animated fadeInUp").css("opacity", "0");
		$(".banner-content").removeClass("animated slideInRight").css("opacity", "0");
		$(".banner-btn").removeClass("animated bounceIn").css("opacity", "0");
		$(".banner-img").removeClass("animated zoomIn").css("opacity", "0");
	});

	$("#content-slider").on("translated.owl.carousel", function() {
		$(".banner-heading").addClass("animated fadeInUp").css("opacity", "0");
		$(".banner-content").addClass("animated slideInRight").css("opacity", "1");
		$(".banner-btn").addClass("animated bounceIn").css("opacity", "1");
		$(".banner-img").addClass("animated zoomIn").css("opacity", "1");
	});



	/* Lightbox */
	lightbox.option({
		'resizeDuration': 200,
		'wrapAround': true
	})

	/* Preloader */
//	$("#banner").YTPlayer();
	$("#preloader").fadeOut(500);

}
