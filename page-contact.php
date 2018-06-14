<?php get_header(); ?>

	<?php if (have_posts()): ?>
	<?php while (have_posts()) : the_post(); ?>
		<main role="main">
			<div data-aos="fade-up" data-aos-offset="0" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="200">
				<h2><?php echo get_field("cta"); ?></h2>
				<h3><?php echo get_field("description"); ?></h3>
				<p class="ul"><a href="mailto:hello@thegoodprcompany.com">hello@thegoodprcompany.com</a></p>
				<ul class="ul social">
					<li><a href="https://www.facebook.com/goodprco/" target="_blank">Facebook</a></li>
					<li><a href="https://twitter.com/goodprco/" target="_blank">Twitter</a></li>
					<li><a href="https://www.instagram.com/goodprco/" target="_blank">Instagram</a></li>
					<li><a href="https://www.linkedin.com/company/goodprco/" target="_blank">LinkedIn</a></li>
				</ul>
				<p>We are located in Seattle, WA.</p>
			</div>
		</main>

	<?php endwhile; ?>
	<?php endif; ?>

	<script>
	(function ($, root, undefined) {

		$(function () {

			$(document).ready(function() {
				init();
			});

			$(window).resize(function() {

			});

			var init = function() {

			};

		});

	})(jQuery, this);
	</script>

<?php get_footer(); ?>
