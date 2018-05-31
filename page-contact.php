<?php get_header(); ?>

	<?php if (have_posts()): ?>
	<?php while (have_posts()) : the_post(); ?>
		<main role="main">
			<h2>Don't be shy, Go On and Connect with Us!</h2>
			<h3>
				Whether you are looking to drive visibility to your company, are interested in joining the team or simply want to hear more about Good PR Co. you can connect with us.
			</h3>
			<p class="ul"><a href="mailto:hello@thegoodprcompany.com">hello@thegoodprcompany.com</a></p>
			<ul class="ul social">
				<li><a href="https://www.facebook.com/goodprco/" target="_blank">Facebook</a></li>
				<li><a href="https://twitter.com/goodprco/" target="_blank">Twitter</a></li>
				<li><a href="https://www.instagram.com/goodprco/" target="_blank">Instagram</a></li>
				<li><a href="https://www.linkedin.com/goodprco/" target="_blank">LinkedIn</a></li>
			</ul>
			<p>We are located in Seattle, WA.</p>
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
