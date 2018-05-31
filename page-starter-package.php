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
						<h1>The Good PR Co. Starter Package!</h1>
						<h3>
							To celebrate the launch of Good PR Co. we are offering a limited time Good PR starter package!
						</h3>
						<p>
							For $500.00 the package includes an initial free one-hour PR consultation where we will determine your highest priority PR needs, followed by five billable  hours of dedicated focused PR work.
						</p>
						<p>
							In order to be eligible, please send a mail to <a href="mailto:hello@thegoodprcompany.com">hello@thegoodprcompany.com</a> with your name, your company name, what you do, why you do what you do and what is your greatest business challenge right now. We will be accepting 10 applicants through the end of July.
						</p>
						<p>
							Applicants will be chosen based on a combination of first come first served basis as well as greatest fit/PR need.
						</p>
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
