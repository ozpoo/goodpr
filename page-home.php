<?php get_header(); ?>

	<main role="main">

		<section class="hero">
			<figure>
				<?php $thumb = get_post_thumbnail_id(); ?>
				<img data-aos="fade-in" data-aos-offset="0" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="800"
					alt=""
					src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
					sizes="auto"
					data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
					class="lazyload" />
			</figure>
			<quote>
				<h2 data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="1600">
					We draw visibility to big ideas and the inspiring people who create them.
				</h2>
			</quote>
		</section>

		<section class="main-quote">
			<quote>
				<h3 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">
					You could have the best business idea in the world, but if no one knows about it, unless you are the rare exception to the rule, you won’t be very successful.
				</h3>
			</quote>
		</section>

		<section class="good-deals">
			<h1 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">Good Deals</h1>
			<div class="banner">
				<figure>
					<?php
						$page = get_page_by_path('starter-package');
						$thumb = get_post_thumbnail_id($page->ID);
					?>
					<img data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="800"
						alt=""
						src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
						sizes="auto"
						data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
						class="lazyload" />
						<div class="call-out">
							<h3 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">To celebrate the launch of Good PR Co. we are offering a limited time starter package.</h3>
						</div>
						<div class="cta">
							<p><button>Details</button></p>
						</div>
					</figure>
				</div>
		</section>

		<section class="goods-and-services">
			<h1 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">Goods &amp; Services</h1>

			<div class="services">
				<div class="service" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
					<div class="illustration">
						<svg version="1.1"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
							 x="0px" y="0px" width="109.9px" height="109.9px" viewBox="0 0 109.9 109.9" style="enable-background:new 0 0 109.9 109.9;"
							 xml:space="preserve">
						<rect x="12.8" y="20.2" class="st1" width="49.5" height="3.7"/>
						<rect x="18.3" y="27.5" class="st1" width="44" height="3.7"/>
						<rect x="12.8" y="34.8" class="st1" width="22" height="3.7"/>
						<rect x="38.5" y="34.8" class="st1" width="23.8" height="3.7"/>
						<rect x="12.8" y="42.1" class="st1" width="11" height="3.7"/>
						<rect x="27.5" y="42.1" class="st1" width="34.8" height="3.7"/>
						<path class="st1" d="M108.1,20.2h-33V1.8c0-1-0.8-1.8-1.8-1.8H1.8C0.8,0,0,0.8,0,1.8v49.5c0,1,0.8,1.8,1.8,1.8h16.5V88
							c0,1,0.8,1.8,1.8,1.8H55V99H42.1c-1,0-1.8,0.8-1.8,1.8v7.3c0,1,0.8,1.8,1.8,1.8h44c1,0,1.8-0.8,1.8-1.8v-7.3c0-1-0.8-1.8-1.8-1.8
							H73.3v-9.2h34.8c1,0,1.8-0.8,1.8-1.8V22C109.9,21,109.1,20.2,108.1,20.2z M3.7,3.7h67.8v9.2H25.7V9.2c0-1-0.8-1.8-1.8-1.8H3.7V3.7z
							 M3.7,49.5V11H22v3.7c0,1,0.8,1.8,1.8,1.8h47.6v33H3.7z M84.3,102.6v3.7H44v-3.7h12.8c1,0,1.8-0.8,1.8-1.8v-11h11v11
							c0,1,0.8,1.8,1.8,1.8H84.3z M106.3,71.5h-3.7v3.7h3.7v11H22v-11h51.3v-3.7H22V53.1h51.3c1,0,1.8-0.8,1.8-1.8V23.8h31.2V71.5z"/>
						<path class="st1" d="M78.1,78.7c0.7,0.3,1.5,0.1,2-0.4l4.2-4.2l6,6c0.4,0.4,0.8,0.5,1.3,0.5s0.9-0.2,1.3-0.5l7.3-7.3
							c0.7-0.7,0.7-1.9,0-2.6l-6-6l4.2-4.2c0.5-0.5,0.7-1.3,0.4-2c-0.3-0.7-1-1.1-1.7-1.1H78.8c-1,0-1.8,0.8-1.8,1.8V77
							C77,77.7,77.4,78.4,78.1,78.7z M80.6,60.5h12.1l-2.4,2.4c-0.7,0.7-0.7,1.9,0,2.6l6,6l-4.7,4.7l-6-6c-0.4-0.4-0.8-0.5-1.3-0.5
							s-0.9,0.2-1.3,0.5l-2.4,2.4V60.5z"/>
						<rect x="34.8" y="56.8" class="st1" width="3.7" height="11"/>
						<rect x="42.1" y="56.8" class="st1" width="18.3" height="3.7"/>
						<rect x="64.1" y="56.8" class="st1" width="9.2" height="3.7"/>
						<rect x="42.1" y="64.1" class="st1" width="11" height="3.7"/>
						<rect x="56.8" y="64.1" class="st1" width="16.5" height="3.7"/>
						<rect x="62.3" y="78.8" class="st1" width="3.7" height="3.7"/>
						</svg>
					</div>
					<div class="slider">
						<div class="description">
							<p>
								Content Creation<br>
								<span class="set-back">Translate and clearly articulate WHY you do what you do in a way that is easy for your audience to understand.</span></p>
						</div>
						<div class="examples">
							<p></p>
						</div>
						<div class="toggle">
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="37.5px" height="12.5px" viewBox="0 0 37.5 12.5" style="enable-background:new 0 0 37.5 12.5;"
								 xml:space="preserve">
								<circle class="st2" cx="31.2" cy="6.2" r="6.2"/>
								<circle class="st3" cx="6.2" cy="6.2" r="6.2"/>
							</svg>
						</div>
					</div>
				</div>

				<div class="service" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="400">
					<div class="illustration">
						<svg version="1.1"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
							 x="0px" y="0px" width="84.3px" height="109.9px" viewBox="0 0 84.3 109.9" style="enable-background:new 0 0 84.3 109.9;"
							 xml:space="preserve">
						<g>
							<path class="st1" d="M83.8,17L67.3,0.5C66.9,0.2,66.5,0,66,0H0v3.7h65.2l15,15l-9.5,19c-2.4-2-3.5-5.3-2.6-8.4l1.4-4.9
								c0.2-0.6,0-1.3-0.5-1.8l-7.3-7.3c-0.3-0.3-0.8-0.5-1.3-0.5H45.8c-0.5,0-1,0.2-1.3,0.5l-7.3,7.3c-0.7,0.7-0.7,1.9,0,2.6l1.8,1.8
								c2.9,2.9,3.3,7.3,1.2,10.6L25.1,22.5c-0.3-0.3-0.8-0.5-1.3-0.5H0v3.7h23.1l16,16c0.7,0.7,1.9,0.7,2.6,0c4.8-4.8,4.8-12.5,0-17.3
								l-0.5-0.5l5.5-5.5h13.1l6,6l-1.1,3.9c-1.5,5.4,1,11.2,6,13.7c0.3,0.1,0.5,0.2,0.8,0.2c0.7,0,1.3-0.4,1.6-1l11-22
								C84.5,18.4,84.3,17.6,83.8,17z"/>
							<path class="st1" d="M77,99.3v-2.2c0-2.5-1.8-4.7-4.1-5.3l-5.1-15.4c-0.1-0.3-0.3-0.6-0.6-0.8l-10.3-8.6v-2.3l12.4,3.1
								c0.8,0.2,1.5-0.1,2-0.8l3.7-5.5c0.5-0.8,0.4-1.8-0.4-2.4l-10.3-8.6V44c0-0.6-0.3-1.2-0.9-1.6c-0.5-0.3-1.2-0.4-1.8-0.1l-6.3,3.2
								l-6.4-4.8c-0.4-0.3-0.9-0.4-1.5-0.3c-0.5,0.1-1,0.4-1.2,0.9L29.6,68.7c-0.4,0.6-0.3,1.4,0.1,2l8.7,12.2l-1.5,9
								c-2.2,0.7-3.9,2.8-3.9,5.2v2.2c-2.1,0.8-3.7,2.8-3.7,5.2v3.7c0,1,0.8,1.8,1.8,1.8h47.6c1,0,1.8-0.8,1.8-1.8v-3.7
								C80.6,102.1,79.1,100,77,99.3z M33.3,69.5l14.8-24.7l5.7,4.3c0.6,0.4,1.3,0.5,1.9,0.2l4.7-2.3v4.4c0,0.5,0.2,1.1,0.7,1.4l9.7,8.1
								l-2,3.1l-13.4-3.4c-0.5-0.1-1.1,0-1.6,0.3c-0.4,0.3-0.7,0.9-0.7,1.4v5.5c0,0.5,0.2,1.1,0.7,1.4L64.4,78l4.5,13.6H40.6l1.5-8.9
								c0.1-0.5,0-1-0.3-1.4L33.3,69.5z M36.6,97.1c0-1,0.8-1.8,1.8-1.8h33c1,0,1.8,0.8,1.8,1.8V99H36.6V97.1z M77,106.3H33v-1.8
								c0-1,0.8-1.8,1.8-1.8h40.3c1,0,1.8,0.8,1.8,1.8V106.3z"/>
						</g>
						</svg>
					</div>
					<div class="slider">
						<div class="description">
							<p>
								Strategic Counsel<br>
								<span class="set-back">Partner and advise you through the complex and sometimes ambiguous world of public relations.</span></p>
						</div>
						<div class="examples">
							<p></p>
						</div>
						<div class="toggle">
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="37.5px" height="12.5px" viewBox="0 0 37.5 12.5" style="enable-background:new 0 0 37.5 12.5;"
								 xml:space="preserve">
								<circle class="st2" cx="31.2" cy="6.2" r="6.2"/>
								<circle class="st3" cx="6.2" cy="6.2" r="6.2"/>
							</svg>
						</div>
					</div>
				</div>

				<div class="service" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="800">
					<div class="illustration">
						<svg version="1.1"
						xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
						x="0px" y="0px" width="109.9px" height="109.9px" viewBox="0 0 109.9 109.9" style="enable-background:new 0 0 109.9 109.9;"
						xml:space="preserve">
						<g>
						<rect x="36.6" y="9.2" class="st1" width="36.6" height="3.7"/>
						<path class="st1" d="M84.3,62.3h-3.7V36.6H77v25.7h-4.6c-3.5,0-6.4,2.9-6.4,6.4c0,1.8,0.7,3.4,1.9,4.6c-1.2,1.2-1.9,2.8-1.9,4.6
						c0,1.2,0.4,2.4,1,3.4c-2.2,1-3.7,3.2-3.7,5.8c0,1,0.2,1.9,0.6,2.7H49.5c0-5.6-2.8-10.6-7.1-13.5c4.1-1.6,7.1-5.6,7.1-10.3
						c0-1-0.8-1.8-1.8-1.8H33V45.8h-3.7v18.3c-3,0-5.5,2.5-5.5,5.5v40.3h3.7V69.6c0-1,0.8-1.8,1.8-1.8h16.3c-0.8,3.2-3.7,5.5-7.1,5.5H33
						c-1,0-1.8,0.8-1.8,1.8c0,1,0.8,1.8,1.8,1.8c7.1,0,12.8,5.8,12.8,12.8v1.8c0,1,0.8,1.8,1.8,1.8h10.7c-0.4,0.8-0.6,1.8-0.6,2.7
						c0,3.5,2.9,6.4,6.4,6.4v7.3h3.7v-7.3h7.3H76c3.5,0,6.4-2.9,6.4-6.4c0-1-0.2-1.9-0.7-2.8c3.4-0.1,6.2-2.9,6.2-6.4
						c0-1.2-0.4-2.4-1-3.4c2.2-1,3.7-3.2,3.7-5.8c0-1.8-0.7-3.4-1.9-4.6c1.2-1.2,1.9-2.8,1.9-4.6C90.7,65.2,87.8,62.3,84.3,62.3z M76,99
						h-0.9H66h-1.8c-1.5,0-2.7-1.2-2.7-2.7s1.2-2.7,2.7-2.7h5.5H76c1.5,0,2.7,1.2,2.7,2.7S77.6,99,76,99z M81.5,89.8H76h-6.4
						c-1.5,0-2.7-1.2-2.7-2.7s1.2-2.7,2.7-2.7h2.7h9.2c1.5,0,2.7,1.2,2.7,2.7S83.1,89.8,81.5,89.8z M84.3,80.6h-2.7h-9.2
						c-1.5,0-2.7-1.2-2.7-2.7s1.2-2.7,2.7-2.7h11.9c1.5,0,2.7,1.2,2.7,2.7S85.8,80.6,84.3,80.6z M84.3,71.5H72.4c-1.5,0-2.7-1.2-2.7-2.7
						c0-1.5,1.2-2.7,2.7-2.7h11.9c1.5,0,2.7,1.2,2.7,2.7C87,70.2,85.8,71.5,84.3,71.5z"/>
						<path class="st1" d="M26.8,22l-1.9-1.4c-0.5-2.3-2.5-4.1-4.9-4.1c-2.7,0-5,2.2-5,5c-1.5-0.3-2.9-0.8-4.1-1.7l-0.6-0.4
						C9.6,19,8.9,19,8.3,19.3c-0.6,0.3-1,0.9-1,1.6v1.5c0,2.2,0.7,4.3,1.9,6.1l-1.4,1.4c-0.5,0.5-0.7,1.3-0.4,2c0.3,0.7,1,1.1,1.7,1.1
						H18c3.5,0,6.5-2.7,6.9-6.2l2.1-2.1c0.4-0.4,0.6-0.9,0.5-1.4C27.4,22.8,27.2,22.3,26.8,22z M21.8,24.7c-0.3,0.3-0.5,0.8-0.5,1.3
						c0,1.8-1.5,3.3-3.2,3.3h-4.7c0.3-0.7,0.2-1.5-0.4-2c-0.9-0.9-1.5-2-1.8-3.1c1.7,0.7,3.6,1.1,5.5,1.1c1,0,1.8-0.8,1.8-1.8v-1.9
						c0-0.8,0.6-1.4,1.3-1.4s1.3,0.6,1.3,1.4c0,0.6,0.3,1.1,0.7,1.5l0.9,0.7L21.8,24.7z"/>
						<path class="st1" d="M53.1,29.3v5.5h-3.7v3.7h3.7v7.3h3.7v-7.3h3.7v-3.7h-3.7v-3.7h3.7v-3.7H55C54,27.5,53.1,28.3,53.1,29.3z"/>
						<path class="st1" d="M71.5,47.6v-22c0-3-2.5-5.5-5.5-5.5H44c-3,0-5.5,2.5-5.5,5.5v22c0,3,2.5,5.5,5.5,5.5h22
						C69,53.1,71.5,50.7,71.5,47.6z M42.1,47.6v-22c0-1,0.8-1.8,1.8-1.8h22c1,0,1.8,0.8,1.8,1.8v22c0,1-0.8,1.8-1.8,1.8H44
						C43,49.5,42.1,48.7,42.1,47.6z"/>
						<path class="st1" d="M33,36.6v-22c0-3-2.5-5.5-5.5-5.5h-22c-3,0-5.5,2.5-5.5,5.5v22c0,3,2.5,5.5,5.5,5.5h22
						C30.5,42.1,33,39.7,33,36.6z M3.7,36.6v-22c0-1,0.8-1.8,1.8-1.8h22c1,0,1.8,0.8,1.8,1.8v22c0,1-0.8,1.8-1.8,1.8h-22
						C4.5,38.5,3.7,37.7,3.7,36.6z"/>
						<path class="st1" d="M104.5,0h-22c-3,0-5.5,2.5-5.5,5.5v22c0,3,2.5,5.5,5.5,5.5h22c3,0,5.5-2.5,5.5-5.5v-22
						C109.9,2.5,107.5,0,104.5,0z M106.3,27.5c0,1-0.8,1.8-1.8,1.8h-22c-1,0-1.8-0.8-1.8-1.8v-9.2h3.9c0.9,4.2,4.6,7.3,9,7.3
						c4.4,0,8.1-3.2,9-7.3h3.9V27.5z M88,16.5c0-3,2.5-5.5,5.5-5.5c3,0,5.5,2.5,5.5,5.5c0,3-2.5,5.5-5.5,5.5C90.4,22,88,19.5,88,16.5z
						M106.3,14.7h-3.9c-0.9-4.2-4.6-7.3-9-7.3c-4.4,0-8.1,3.2-9,7.3h-3.9V5.5c0-1,0.8-1.8,1.8-1.8h22c1,0,1.8,0.8,1.8,1.8V14.7z"/>
						<rect x="53.1" y="75.1" class="st1" width="3.7" height="3.7"/>
						</g>
						</svg>
					</div>
					<div class="slider">
						<div class="description">
							<p>
								Media Strategy<br>
								<span class="set-back">Develop strategies through leveraging media to  get your big ideas seen and heard!</span></p>
						</div>
						<div class="examples">
							<p></p>
						</div>
						<div class="toggle">
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="37.5px" height="12.5px" viewBox="0 0 37.5 12.5" style="enable-background:new 0 0 37.5 12.5;"
								 xml:space="preserve">
								<circle class="st2" cx="31.2" cy="6.2" r="6.2"/>
								<circle class="st3" cx="6.2" cy="6.2" r="6.2"/>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="good-vibes">
			<h1 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">Good Vibes</h1>
			<h3 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">The following content is meant to inform and inspire women who hustle and dream big.</h3>

			<section class="vibes flky">
				<?php
				$count = 0;
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('posts_per_page=-1&post_type=good_vibes');
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<article class="vibe" data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="<?php echo $count++ * 200; ?>">
					<a href="<?php the_permalink(); ?>">
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
					</a>
				</article>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</section>
		</section>

		<section class="good-press">
			<h1 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">Good Press</h1>
			<h3 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">A few published words of encouragement and opinions from Molly.</h3>

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
				init();
			});

			$(window).resize(function() {

			});

			var init = function() {
				var flky = new Flickity( '.flky', {
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
			};

			var showList = function() {
				TweenMax.staggerTo($(".nav li"), 0.6, {autoAlpha: '1'}, 0.1);
			};

		});

	})(jQuery, this);
	</script>

<?php get_footer(); ?>
