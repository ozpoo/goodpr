<?php get_header(); ?>

	<main role="main">

		<div class="title">
			<h2>News</h2>
		</div>

		<section class="news-list">
			<?php get_template_part('loop-news'); ?>
		</section>

	</main>

	<script>
	(function ($, root, undefined) {

		$(function () {

			$(document).ready(function() {
				init();
			});

			var init = function() {
				setBackground();
				setTimeout(function() {
					showList();
				}, 660);
			};

			var setBackground = function(){
				var backgrounds = ["bg01","bg02","bg03","bg04","bg05","bg06"];
				for(var i=0; i<backgrounds.length; i++) {
					$("body").removeClass(backgrounds[i]);
				}
				$("body").addClass(backgrounds[3]);
			};

			var showList = function() {
				TweenMax.staggerTo($(".news-list .news-article"), 0.6, {autoAlpha: '1', bottom:"0px"}, 0.06);
			};

		});

	})(jQuery, this);
	</script>

<?php get_footer(); ?>
