(function ($, root, undefined) {

	$(function () {

		var $lastScrollTop, $scrollTop, $current, $flky;

		$(document).ready(function() {

		});

		$(window).load(function() {
			setBackground();
			init();
			animate();
			reveal();
		});

		var init = function() {
			document.addEventListener("touchstart", function() {}, true);
		  setScroll();
			addBlacklistClass();

			var options = {
				prefetch: true,
				scroll: false,
				cacheLength: 3,
				repeatDelay: 500,
				loadingClass: 'is-loading',
        anchors: 'a',
				blacklist: '.wp-link',
				onBefore: function($currentTarget, $container) {

				},
				onStart: {
          duration: 660,
          render: function ( $container ) {
						$container.addClass('is-exiting');
		        $smoothState.restartCSSAnimations();
						hide();
		        setTimeout(function(){
		          $container.html("");
		        }, 660);
          }
        },
				onProgress: {
			    duration: 0,
			    render: function ($container) {
					}
			  },
				onReady: {
			    duration: 0,
			    render: function($container, $newContent) {
						if($(".flky").length) {
							$flky.flickity('destroy');
							console.log("destroy");
							$flky = "";
						}
		        $container.removeClass('is-exiting');
			    }
				},
        onAfter: function( $container, $newContent ) {
					$container.html($newContent);
					doScroll();
					setBackground();
					setTimeout(function(){
						reveal();
						setListeners();
					}, 660);
        }
      };

			$smoothState = $('#page').smoothState(options).data('smoothState');
			$lastScrollTop = $scrollTop = $(document).scrollTop();
			$current = "show";

			// if (!CSS.supports('backdrop-filter', 'blur(4px)') && !CSS.supports('-webkit-backdrop-filter', 'blur(4px)')) {
		  //   $('[data-target="#myModal"]').click(function () {
		  //       html2canvas(document.body).then(function (canvas) {
		  //           $('.promotion').css({
		  //               "background-image": 'url(' + canvas.toDataURL("image/png") + ')',
		  //               "filter": "blur(4px)",
		  //               "opacity": "1"
		  //           });
		  //       });
		  //   });
			// }
			setListeners();
		};

		var setBackground = function() {
			if($("#site-content-wrap").hasClass("home")) {
				$("body").attr("data-background", "home");
			} else if($("#site-content-wrap").hasClass("about")) {
				$("body").attr("data-background", "about");
			} else if($("#site-content-wrap").hasClass("contact")) {
				$("body").attr("data-background", "contact");
			} else if($("#site-content-wrap").hasClass("post-type-archive-good_vibes")) {
				$("body").attr("data-background", "good-vibes");
			} else if($("#site-content-wrap").hasClass("post-type-archive-good_press")) {
				$("body").attr("data-background", "good-press");
			} else if($("#site-content-wrap").hasClass("starter-package")) {
				$("body").attr("data-background", "starter-package");
			} else {
				$("body").attr("data-background", "none");
			}
		};

		var reveal = function() {
			$("#site-content-wrap").addClass("show");
			setTimeout(function(){
				$(".logo, .menu, .back").addClass("show");
			}, 660);
			if(!Cookies.get('gpr-promo')){
				setTimeout(function(){
					$(".promotion").addClass("show");
					Cookies.set('gpr-promo', 'nailed-it', { expires: 7 });
				}, 8000);
			}
		};

		var hide = function() {
			$("#site-content-wrap, .logo, .menu, .back").removeClass("show");
		};

		var addBlacklistClass = function() {
			$('a').each( function() {
				if ( this.href.indexOf('/wp-admin/') !== -1 ||
					 this.href.indexOf('/wp-login.php') !== -1 ) {
					$( this ).addClass( 'wp-link' );
				}
			});
		};

		var setScroll = function(direction) {
		  if ('scrollRestoration' in history) {
		    history.scrollRestoration = 'manual';
		  }
		  $scrollTo = 0;
		};

		var doScroll = function(direction) {
		  $("html, body").animate({
		    scrollTop: $scrollTo + "px"
		  }, 10);
		  $scrollTo = history.state.scrollTop;
		};

		var animate =  function() {
			requestAnimationFrame( animate );
			$scrollTop = $(document).scrollTop();
			if($(document).height() - $scrollTop < $(window).height() * 1.5) {
				setMenuTransform("up");
			} else {
				switch (getDirection()) {
					case "up":
						setMenuTransform("up");
						break;
					case "down":
						setMenuTransform("down");
						break;
					default:
						break;
				}
			}
			$lastScrollTop = $scrollTop;

			if($("body").attr("data-background") == "home") {
				if($scrollTop > $(window).height()) {
					$(".header").addClass("flip");
				} else {
					$(".header").removeClass("flip");
				}
			}
		};

		var getDirection = function() {
			var direction;
			if($lastScrollTop < $scrollTop && $scrollTop > 0){
				direction = "down";
				// console.log(direction);
			} else if($lastScrollTop > $scrollTop && $scrollTop > 0) {
				direction = "up";
				// console.log(direction);
			} else {
				direction = null;
			}
			return direction;
		};

		var setListeners = function() {
			$(".promotion .close button").on("click", function(){
				$(".promotion").removeClass("show");
			});

			// console.log("shit");

			$(".vibe .toggle").on("click", function(ev){
				ev.preventDefault();
				$(".modal-content .panel .content").html($(this).parent().find(".vibe-content").html());
				$(".modal-content").addClass("show");
			});

			$(".modal-content .close button").on("click", function(){
				$(".modal-content").removeClass("show");
			});

			if($(".flky").length) {
				console.log(":flky");
				$flky = new Flickity('.flky', {
					accessibility: true,
					adaptiveHeight: false,
					autoPlay: false,
					cellAlign: 'center',
					cellSelector: undefined,
					contain: false,
					draggable: true,
					dragThreshold: 3,
					freeScroll: false,
					selectedAttraction: 0.1,
					friction: 1,
					groupCells: false,
					initialIndex: 2,
					lazyLoad: false,
					percentPosition: true,
					prevNextButtons: false,
					pageDots: true,
					resize: true,
					rightToLeft: false,
					setGallerySize: true,
					watchCSS: false,
					wrapAround: true
				});
			}
			AOS.init();
		};

		var setMenuTransform = function(direction) {
			if(direction == "up" && $current != "show") {
				$(".logo, .menu, .back").addClass("show");
				$current = "show";
			} else if(direction == "down" && $current != "hide") {
				$(".logo, .menu, .back").removeClass("show");
				$current = "hide";
			}
		};

		var requestAnimationFrame = function() {
	    return (
	        window.requestAnimationFrame       ||
	        window.webkitRequestAnimationFrame ||
	        window.mozRequestAnimationFrame    ||
	        window.oRequestAnimationFrame      ||
	        window.msRequestAnimationFrame     ||
	        function(/* function */ callback){
	            window.setTimeout(callback, 1000 / 60);
	        }
	    );
		}();

	});

})(jQuery, this);
