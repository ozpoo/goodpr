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
					<p><?php the_date(); ?></p>
				</div>
				<div class="flexed copy">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</section>

		<script>

			(function ($, root, undefined) {
				$(function () {

					var loaded, flky, scrollTop, delta;

					$(document).ready(function() {
						init();
					});

					$(window).load(function() {
						reveal();
						animate();
					});

					function init() {

					}

					function reveal() {

					}

					function animate() {
						requestAnimationFrame( animate );

					}

					(function() {
						var lastTime = 0;
						var vendors = ['ms', 'moz', 'webkit', 'o'];
						for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
							window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
							window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
						}

						if (!window.requestAnimationFrame) {
							window.requestAnimationFrame = function(callback, element) {
								var currTime = new Date().getTime();
								var timeToCall = Math.max(0, 16 - (currTime - lastTime));
								var id = window.setTimeout(function() { callback(currTime + timeToCall); },
								timeToCall);
								lastTime = currTime + timeToCall;
								return id;
							}
						}

						if (!window.cancelAnimationFrame) {
							window.cancelAnimationFrame = function(id) {
								clearTimeout(id);
							}
						}
					}());

				});
			})(jQuery, this);

		</script>

	</main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
