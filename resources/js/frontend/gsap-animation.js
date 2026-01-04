(function ($) {
	"use strict";

gsap.registerPlugin(ScrollTrigger, SplitText);
gsap.config({
    nullTargetWarn: false,
    trialWarn: false
});

	/*----  Functions  ----*/

	function getpercentage(x, y, elm) { 
		elm.find('.pbmit-fid-inner').html(y + '/' + x);
		var cal = Math.round((y * 100) / x);
		return cal;
	}

	function pbmit_title_animation() {
		ScrollTrigger.matchMedia({
			"(min-width: 1025px)": function() {
				var pbmit_var = jQuery('.pbmit-custom-heading, .pbmit-heading-subheading');
				if (!pbmit_var.length) {
					return;
				}
				const quotes = document.querySelectorAll(".pbmit-custom-heading .pbmit-title , .pbmit-heading-subheading .pbmit-title");
				quotes.forEach(quote => {
					var getclass = quote.closest('.pbmit-custom-heading ,.pbmit-heading-subheading').className;
					var animation = getclass.split('animation-');
					if (animation[1] == "style1") return
					//Reset if needed
					if (quote.animation) {
						quote.animation.progress(1).kill();
						quote.split.revert();
					}
					quote.split = new SplitText(quote, {
						type: "lines,words",
						linesClass: "split-line"
					});
					gsap.set(quote, { perspective: 400 });
					if (animation[1] == "style2") {
						gsap.set(quote.split.words, {
							opacity: 0,
							y: "90%",
							rotateX: "-40deg"
						});
					}
					if (animation[1] == "style3") {
						gsap.set(quote.split.words, {
							opacity: 0,
							x: "50"
						});
					}
					if (animation[1] == "style4") {
						gsap.set(quote.split.words, {
							opacity: 0,
						});
					}
					quote.animation = gsap.to(quote.split.words, {
						scrollTrigger: {
							trigger: quote,
							start: "top 90%",
						},
						x: "0",
						y: "0",
						rotateX: "0",
						opacity: 1,
						duration: 1,
						ease: Back.easeOut,
						stagger: .02
					});
				});
			},
		});
	}

	var pbmit_img_animation = function() {
		const pbmit_img_class = jQuery('.pbmit-animation-style1, .pbmit-animation-style2, .pbmit-animation-style3, .pbmit-animation-style4, .pbmit-animation-style5, .pbmit-animation-style6, .pbmit-animation-style7');
		pbmit_img_class.each(function() {
		const each_box = jQuery(this);
		new Waypoint({
			element: this, 
			handler: function(direction) {
			if (direction === 'down') {
				each_box.addClass('active');
			}
			},
			offset: '70%',
		});
		});
	}

	var pbmit_tween_effect = function() {
		if (jQuery(window).width() < 768) return;
		jQuery(window).on('scroll resize', function () {
			jQuery('.pbmit-tween-effect').each(function () {
			let $el = jQuery(this),
				rect = this.getBoundingClientRect(),
				inView = rect.top < window.innerHeight && rect.bottom > 0;
			if (!inView) return;
			let progress = 1 - (rect.top / window.innerHeight);
			progress = Math.max(0, Math.min(1, progress)); // Clamp 0–1
			const getVal = (attr) => parseFloat($el.data(attr)) || 0;
			let tx = getVal('x-start') + (getVal('x-end') - getVal('x-start')) * progress,
				ty = getVal('y-start') + (getVal('y-end') - getVal('y-start')) * progress,
				scale = getVal('scale-x-start') + (getVal('scale-x-end') - getVal('scale-x-start')) * progress,
				skewX = getVal('skew-x-start') + (getVal('skew-x-end') - getVal('skew-x-start')) * progress,
				skewY = getVal('skew-y-start') + (getVal('skew-y-end') - getVal('skew-y-start')) * progress,
				rotate = getVal('rotate-x-start') + (getVal('rotate-x-end') - getVal('rotate-x-start')) * progress;
			$el.css('transform', `translate(${tx}%, ${ty}%) scale(${scale}) skew(${skewX}deg, ${skewY}deg) rotate(${rotate}deg)`);
			});
		}).trigger('scroll');
	}

	var icon_box_height_content = function(){
		jQuery('.pbmit-ihbox-style-5').each(function () {
			var infoboxhight = jQuery(this).find(".pbmit-ihbox-content-inner").height();
			jQuery(this).find(".pbmit-ihbox-content-inner").css("margin-bottom",  "-"+infoboxhight + "px");	 
		});
		jQuery('.pbmit-ihbox-style-11').each(function () {
			var infoboxhight1 = jQuery(this).find(".pbmit-ihbox-contents").height();
			jQuery(this).find(".pbmit-ihbox-contents").css("margin-bottom",  "-"+infoboxhight1 + "px");	 
			jQuery(this).css("margin-top",  infoboxhight1 + "px"); 
		});
	}

	var pbmit_sticky_header = function () {
		if (jQuery('.pbmit-header-sticky-yes').length > 0) {
			var header_html = jQuery('#masthead .pbmit-main-header-area').html();
			jQuery('.pbmit-sticky-header').append(header_html);
			jQuery('.pbmit-sticky-header #menu-toggle').attr('id', 'menu-toggle2');
			jQuery('#menu-toggle2').on('click', function () {
				jQuery("#menu-toggle").trigger("click");
			});
			jQuery('.pbmit-sticky-header .main-navigation ul, .pbmit-sticky-header .main-navigation ul li, .pbmit-sticky-header .main-navigation ul li a').removeAttr('id');
			jQuery('.pbmit-sticky-header h1').each(function () {
				var thisele = jQuery(this);
				var thisele_class = jQuery(this).attr('class');
				thisele.replaceWith('<span class="' + thisele_class + '">' + jQuery(thisele).html() + '</span>');
			});

			// For infostack header
			if (jQuery('.pbmit-main-header-area').hasClass('pbmit-infostack-header')) {
				jQuery('.pbmit-sticky-header .pbmit-pre-header-wrapper').remove();
			}
		}
	};

	var pbmit_sticky_header_class = function () {
		var lastScroll = 0;

		if (jQuery('#wpadminbar').length > 0) {
			jQuery('#masthead').addClass('pbmit-adminbar-exists');
		}

		jQuery(window).on('scroll', function () {
			var scroll = jQuery(window).scrollTop();
			var header_height = 0;

			if (jQuery('.pbmit-main-header-area').length > 0) {                
				header_height = jQuery('.pbmit-main-header-area').height();
			}

			if (scroll === 0) {
				jQuery('#masthead .pbmit-sticky-header').removeClass('pbmit-fixed-header');
			} else {
				if (scroll > lastScroll) {
					// Scrolling down → hide sticky
					jQuery('#masthead .pbmit-sticky-header').removeClass('pbmit-fixed-header');
				} else {
					// Scrolling up
					if (scroll > 300) {
						// Above 300px → show sticky
						jQuery('#masthead .pbmit-sticky-header').addClass('pbmit-fixed-header');
					} else {
						// Below 300px → hide sticky
						jQuery('#masthead .pbmit-sticky-header').removeClass('pbmit-fixed-header');
					}
				}
			}
			lastScroll = scroll;
		});
	};

	var pbmit_search_btn = function() {
		jQuery(function() {
			var search_form = jQuery(".pbmit-header-search-form");
			var search_field = jQuery('.pbmit-header-search-form .search-field');
			var $body = jQuery('body');
			jQuery(".pbmit-header-search-btn").on('click', function(e) {
				if (!search_form.hasClass('active')) {
					search_form.addClass('active');
					setTimeout(function() { search_field.get(0).focus(); }, 500);
				} else if (search_field.val() === '') {
					search_form.removeClass('active');
					search_field.get(0).focus();
				}
				e.preventDefault();
				return false;
			});
			jQuery(".pbmit-header-search-form .pbmit-search-overlay, .pbmit-header-search-form .pbmit-search-close").on('click', function (e) {
				$body.addClass('pbmit-search-animation-out');
				setTimeout(function () {
					$body.removeClass('pbmit-search-animation-out');
				}, 800);
				setTimeout(function () {
					search_form.removeClass('active');
				}, 800);
				e.preventDefault();
				return false;
			});
		});
	}

	var pbmit_active_hover = function() {
		var pbmit_var = jQuery('.pbmit-element-static-box-style-1, .pbmit-element-static-box-style-2, .pbmit-element-portfolio-style-2 ,.pbmit-element-service-style-3');
		if (!pbmit_var.length) {
			return;
		}
		pbmit_var.each(function() {
			var pbmit_Class = '.pbmit-static-box-style-1, .pbmit-hover-inner .pbmit-title-wrapper, .pbmit-portfolio-style-2, .pbmit-hover-inner li';
			jQuery(this)
				.find(pbmit_Class).first()
				.addClass('pbmit-active');
			jQuery(this)
				.find(pbmit_Class)
				.on('mouseover', function() {
					jQuery(this).addClass('pbmit-active').siblings().removeClass('pbmit-active');
				});
		});
	}

	var service_box_height_content = function(){
		jQuery('.pbmit-element-service-style-3 .pbmit-service-content').each(function () {
			var infoboxhight = jQuery(this).height();
			jQuery('.pbmit-element-service-style-3').find(".swiper-hover-slide-images .swiper-slider").css("height",  infoboxhight + "px");	 
		});
		jQuery('.pbmit-element-service-style-3 .pbmit-service-icon').each(function () {
			var infoboxhight = jQuery('.pbmit-element-service-style-3 .pbmit-service-icon').height();
			jQuery('.pbmit-element-service-style-3')
				.find(".pbmit-service-icon-wrap .swiper-slider")
				.css({
						height: infoboxhight + "px",
						width: infoboxhight + "px"
					});	 
				});
	}

	var pbmit_service_bg_hover = function() {
		if (typeof Swiper !== 'undefined') {
			var pbmit_hover_01 = new Swiper(".pbmit-element-service-style-3 .pbmit-hover-image-faded", {
				speed: 60,
				lazy: true,
				direction: "vertical",
				allowTouchMove: false,
				slidesPerView: 1
			});
			var pbmit_hover_2 = new Swiper(".pbmit-element-service-style-3 .pbmit-hover-icon-faded", {
				speed: 6000,
				effect: 'fade',
				allowTouchMove: false,
				slidesPerView: 1
			});
		}
		jQuery('.pbmit-element-service-style-3 .pbmit-hover-inner li').on('click',function(e) {
			e.preventDefault();
			var myindex = jQuery(this).index();
			pbmit_hover_01.slideTo(myindex, 1000, false);
			pbmit_hover_2.slideTo(myindex, 1000, false);
		});
	}

	/* Static Box Slider */
	var pbmit_staticbox_hover_slide = function() {
		if (typeof Swiper !== 'undefined') {
		var pbmit_hover = new Swiper(".pbmit-element-static-box-style-2 .pbmit-static-image", {
			speed: 6000,
			effect: 'fade',
			allowTouchMove: false,
			fadeEffect: {
			crossFade: true,
			},
		});
		jQuery('.pbmit-element-static-box-style-2 .pbmit-hover-inner li').on('mouseover', function (e) {
			e.preventDefault();
			var myindex = jQuery(this).index();
			pbmit_hover.slideTo(myindex, 1000, false);
		});
		}
	};

	var pbmit_thia_sticky = function() {
		if(typeof jQuery.fn.theiaStickySidebar == "function"){
			jQuery('.pbmit-sticky-sidebar').theiaStickySidebar({
				additionalMarginTop: 100
			});
			jQuery('.pbmit-sticky-column').theiaStickySidebar({
				additionalMarginTop: 180
			});
		}
	}

	/* ====================================== */
	/* Tabs
	/* ====================================== */
	var pbmit_tabs_element = function() {
		var tab_number = '';
		jQuery('.pbmit-tab-link').on('click', function(){
			if( !jQuery(this).hasClass('pbmit-tab-li-active') ){
				var parent = jQuery(this).closest('ul.pbmit-tabs-links');
				jQuery( 'li', parent).each(function(){
					jQuery(this).removeClass('pbmit-tab-li-active')
				});
				jQuery(this).addClass('pbmit-tab-li-active');
				tab_number = jQuery( this ).data('pbmit-tab');
				jQuery(this).parent().parent().find('.pbmit-tab-content').removeClass('pbmit-tab-active');
				jQuery(this).parent().parent().find('.pbmit-tab-content-'+tab_number).addClass('pbmit-tab-active');
			}
		});
		var this_title = '';
		jQuery('.pbmit-tab-content-title').on('click', function(){
			this_title = jQuery(this);
			tab_number = jQuery( this ).data('pbmit-tab');
			jQuery( this ).closest('.pbmit-tabs').find('li.pbmit-tab-link[data-pbmit-tab="'+tab_number+'"]',  ).trigger('click');
			var animateTo = jQuery(this_title).offset().top - 10;
			if (jQuery('#wpadminbar').length > 0) {
				animateTo = animateTo - jQuery('#wpadminbar').height();
			}
			jQuery('html, body').animate({
				scrollTop: animateTo
			}, 500);
		});
	};

	/* ====================================== */
	/* Add Animation
	/* ====================================== */
	function add_animation(threshold = 0.1) {
		const reveals = document.querySelectorAll(".animation");

		const observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add("loaded");
			} else {
				entry.target.classList.remove("loaded");
			}
			});
		}, { threshold });

		reveals.forEach(el => observer.observe(el));

		return observer;
	}

	ScrollTrigger.matchMedia({
		"(max-width: 1200px)": function() {
			ScrollTrigger.getAll().forEach(t => t.kill());
		}
	});

	// on load
	jQuery(window).on('load', function(){
		pbmit_title_animation();
		pbmit_img_animation();
		pbmit_tween_effect();
		icon_box_height_content();
		pbmit_sticky_header();
		pbmit_sticky_header_class();
		pbmit_search_btn();
		pbmit_active_hover();
		service_box_height_content();
		pbmit_service_bg_hover();
		pbmit_staticbox_hover_slide();
		pbmit_thia_sticky();
		pbmit_tabs_element();
		add_animation(0);

		gsap.delayedCall(1, () =>
			ScrollTrigger.getAll().forEach((t) => {
				t.refresh();
			})
		);	
	});
})($);