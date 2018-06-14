<?php get_header(); ?>

	<?php if (have_posts()): ?>
	<?php while (have_posts()) : the_post(); ?>
		<main role="main">
			<section class="hero">
				<figure>
					<?php $thumb = get_post_thumbnail_id(); ?>
					<img data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="200"
						alt=""
						src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
						sizes="auto"
						data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
						class="lazyload" />
				</figure>
			</section>
			<section class="content">
				<div class="flexer" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="600">
					<div class="flexed email">
						<p><a href="mailto:hello@thegoodprcompany.com">hello@thegoodprcompany.com</a></p>
					</div>
					<div class="flexed copy">
						<h1><?php echo get_field("title"); ?></h1>
						<h3><?php echo get_field("cta"); ?></h3>
						<?php echo get_field("description"); ?>
					</div>
				</div>
			</section>
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
