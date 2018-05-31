(function ($, root, undefined) {

	$(function () {

		var $lastScrollTop, $scrollTop, $current;

		$(document).ready(function() {
			setBackground();
			init();
			animate();
			if($("#site-content-wrap").hasClass("home")) {
				setTimeout(function(){
					reveal();
				}, 860);
			} else {
				reveal();
			}
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
		        $container.removeClass('is-exiting');
			    }
				},
        onAfter: function( $container, $newContent ) {
					$container.html($newContent);
					doScroll();
					setBackground();
					if($("#site-content-wrap").hasClass("home")) {
						setTimeout(function(){
							reveal();
						}, 860);
					} else {
						setTimeout(function(){
							reveal();
						}, 660);
					}
        }
      };

			$smoothState = $('#page').smoothState(options).data('smoothState');
			$lastScrollTop = $scrollTop = $(document).scrollTop();
			$current = "show";
		};

		var setBackground = function() {
			if($("#site-content-wrap").hasClass("home")) {
				$("body").attr("data-background", "home");
			} else if($("#site-content-wrap").hasClass("about")) {
				$("body").attr("data-background", "about");
			} else if($("#site-content-wrap").hasClass("contact")) {
				$("body").attr("data-background", "contact");
			} else {
				$("body").attr("data-background", "none");
			}
		};

		var reveal = function() {
			$("#site-content-wrap").addClass("show");
			setTimeout(function(){
				$(".logo, .menu, .back").addClass("show");
			}, 660);
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
		};

		var getDirection = function() {
			var direction;
			if($lastScrollTop < $scrollTop && $scrollTop > 0){
				direction = "down";
				console.log(direction);
			} else if($lastScrollTop > $scrollTop && $scrollTop > 0) {
				direction = "up";
				console.log(direction);
			} else {
				direction = null;
			}
			return direction;
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
