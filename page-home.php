<?php get_header(); ?>

	<main role="main">

		<div class="modal-content">
			<div class="panel">
				<div class="close">
					<p>
						<button>
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="29px" height="29px" viewBox="0 0 29 29" style="enable-background:new 0 0 29 29;" xml:space="preserve">
							<style type="text/css">
								.y{fill:none;stroke:#ffffff;stroke-miterlimit:10;}
							</style>
							<line class="y" x1="0.4" y1="0.4" x2="28.6" y2="28.6"/>
							<line class="y" x1="28.6" y1="0.4" x2="0.4" y2="28.6"/>
							</svg>
						</button>
					 </p>
				</div>
				<div class="content"></div>
			</div>
		</div>

		<section class="hero">
			<figure>
				<?php $thumb = get_post_thumbnail_id(); ?>
				<img data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="200"
					alt=""
					src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
					sizes="auto"
					data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
					class="lazyload" />
			</figure>
			<quote>
				<h1 data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="1600">
					<?php echo get_field("hero_quote"); ?>
				</h1>
			</quote>
		</section>

		<section class="main-quote">
			<quote>
				<h3 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">
					<?php echo get_field("intro_message"); ?>
				</h3>
			</quote>
		</section>

		<!-- <section class="good-deals">
			<h1 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">Good Deals</h1>
			<div class="banner">
				<figure>
					<?php
						$page = get_page_by_path('starter-package');
						$thumb = get_post_thumbnail_id($page->ID);
					?>
					<img data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="600"
						alt=""
						src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
						sizes="auto"
						data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
						class="lazyload" />
						<div class="call-out">
							<h3 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200"><?php echo get_field("cta", $page->ID); ?></h3>
						</div>
						<div class="cta">
							<p><a href="<?php echo site_url( '/starter-package', 'http' ); ?>">Details</a></p>
						</div>
					</figure>
				</div>
		</section> -->

		<section class="goods-and-services">
			<h1 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">Goods &amp; Services</h1>
			<div class="services">
				<?php while ( have_rows('goods_&_services') ) : the_row(); ?>
					<?php $count = 0; ?>
					<?php while ( have_rows('services') ) : the_row(); ?>
						<div class="service" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="<?php echo $count++ * 200; ?>">
							<div class="illustration">
								<?php echo the_sub_field('illustration'); ?>
							</div>
							<div class="slider">
								<div class="description">
									<p>
										<?php echo the_sub_field('title'); ?><br>
										<span class="set-back"><?php echo the_sub_field('description'); ?><br></span></p>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endwhile; ?>
			</div>
		</section>

		<section class="good-vibes">
			<div class="view"><p><a href="<?php echo site_url( '/good-vibes', 'http' ); ?>">View All Vibes</a></p></div>
			<h1 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">Good Vibes</h1>
			<h3 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200"><?php echo get_field("good_vibes")["description"]; ?></h3>

			<section class="vibes flky">
				<?php
				$count = 0;
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('posts_per_page=-1&post_type=good_vibes');
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<article class="vibe" data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="<?php echo $count++ * 200; ?>">
					<button class="toggle">
						<figure>
							<?php $thumb = get_post_thumbnail_id(); ?>
							<img
								alt=""
								src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
								sizes="auto"
								data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
								class="lazyload" />
						</figure>
						<?php
						$category = get_the_category();
						$category = $category[0]->cat_name;
						?>
						<small><?php echo $category; ?></small>
						<h4><?php the_title(); ?></h4>
					</button>
					<div class="vibe-content">
						<figure>
							<?php $thumb = get_post_thumbnail_id(); ?>
							<img
							alt=""
							src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
							sizes="auto"
							data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
							class="lazyload" />
						</figure>
						<p><small><?php echo $category; ?></small></p>
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</article>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</section>
		</section>

		<section class="good-press">
			<!-- <div class="view"><p><a href="<?php echo site_url( '/good-press', 'http' ); ?>">View All Press</a></p></div> -->
			<h1 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">Good Press</h1>
			<h3 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200"><?php echo get_field("good_press")["description"]; ?></h3>

			<section class="articles">
				<?php
				$count = 0;
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('posts_per_page=4&post_type=good_press');
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<article class="article" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="<?php echo $count++ * 200; ?>">
					<a href="<?php echo get_field("url"); ?>" target="_blank">
						<figure>
							<?php $thumb = get_post_thumbnail_id(); ?>
							<img
								alt=""
								src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
								sizes="auto"
								data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
								class="lazyload" />
						</figure>
						<small><?php echo get_field("author"); ?></small>
						<h4><?php the_title(); ?></h4>
					</a>
				</article>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</section>
		</section>
	</main>

	<script>
	(function ($, root, undefined) {

		$(function () {

			$(document).ready(function() {

			});

			$(window).load(function() {
				init();
			});

			var init = function() {

			};

			var showList = function() {
				TweenMax.staggerTo($(".nav li"), 0.6, {autoAlpha: '1'}, 0.1);
			};

		});

	})(jQuery, this);
	</script>

<?php get_footer(); ?>
