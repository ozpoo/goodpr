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
					<img data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="600"
						alt=""
						src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
						sizes="auto"
						data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
						class="lazyload" />
						<div class="call-out">
							<h3 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">To celebrate the launch of Good PR Co. we are offering a limited time starter package!</h3>
						</div>
						<div class="cta">
							<p><a href="<?php echo site_url( '/starter-package', 'http' ); ?>">Details</a></p>
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
						<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
						<svg version="1.1"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
							 x="0px" y="0px" width="109.9px" height="109.9px" viewBox="0 0 109.9 109.9" style="enable-background:new 0 0 109.9 109.9;"
							 xml:space="preserve">
						<g>
							<path class="st1" d="M62.9,50.5c6.9,1.9,10.8,5.7,10.9,5.7l2.6-2.6c-0.3-0.3-8-7.9-21.5-7.9c-15.4,0-21.4,7.7-21.6,8.1l2.9,2.2
								c0.2-0.2,3.2-4,10.9-5.8c-0.8,1.4-1.3,3-1.3,4.7c0,5.1,4.1,9.2,9.2,9.2c5.1,0,9.2-4.1,9.2-9.2C64.1,53.4,63.7,51.9,62.9,50.5z
								 M55,60.5c-3,0-5.5-2.5-5.5-5.5s2.5-5.5,5.5-5.5c3,0,5.5,2.5,5.5,5.5S58,60.5,55,60.5z"/>
							<path class="st1" d="M5.5,33h33c1,0,1.8-0.8,1.8-1.8v-22c0-1-0.8-1.8-1.8-1.8h-33c-1,0-1.8-0.8-1.8-1.8c0-1,0.8-1.8,1.8-1.8h34.8V0
								H5.5C2.5,0,0,2.5,0,5.5v22C0,30.5,2.5,33,5.5,33z M3.7,10.7C4.2,10.9,4.9,11,5.5,11h31.2v18.3H5.5c-1,0-1.8-0.8-1.8-1.8V10.7z"/>
							<path class="st1" d="M9.2,25.7h11c1,0,1.8-0.8,1.8-1.8v-7.3c0-1-0.8-1.8-1.8-1.8h-11c-1,0-1.8,0.8-1.8,1.8v7.3
								C7.3,24.8,8.2,25.7,9.2,25.7z M11,18.3h7.3V22H11V18.3z"/>
							<rect x="25.7" y="14.7" class="st1" width="7.3" height="3.7"/>
							<rect x="25.7" y="22" class="st1" width="7.3" height="3.7"/>
							<path class="st1" d="M108.1,0H67.8c-1,0-1.8,0.8-1.8,1.8v25.7c0,1,0.8,1.8,1.8,1.8h14.7v7.3h-3.7v3.7h5.5h9.2H99v-3.7h-3.7v-7.3
								h12.8c1,0,1.8-0.8,1.8-1.8V1.8C109.9,0.8,109.1,0,108.1,0z M91.6,36.6h-5.5v-7.3h5.5V36.6z M106.3,25.7H69.6v-22h36.6V25.7z"/>
							<path class="st1" d="M18.3,106.3H3.7V80.6h5.5V77H1.8c-1,0-1.8,0.8-1.8,1.8v29.3c0,1,0.8,1.8,1.8,1.8h18.3c1,0,1.8-0.8,1.8-1.8
								V89.8h-3.7V106.3z"/>
							<rect x="9.2" y="99" class="st1" width="3.7" height="3.7"/>
							<path class="st1" d="M31.2,66H22v-5.5c0-1-0.8-1.8-1.8-1.8H3.7c-1,0-1.8,0.8-1.8,1.8v11c0,1,0.8,1.8,1.8,1.8h9.2v5.5
								c0,1,0.8,1.8,1.8,1.8h3.7v3.7c0,0.7,0.4,1.4,1.1,1.7c0.2,0.1,0.5,0.1,0.7,0.1c0.5,0,0.9-0.2,1.3-0.5l5-5h4.7c1,0,1.8-0.8,1.8-1.8
								v-11C33,66.8,32.2,66,31.2,66z M12.8,67.8v1.8H5.5v-7.3h12.8V66h-3.7C13.6,66,12.8,66.8,12.8,67.8z M29.3,77h-3.7
								c-0.5,0-1,0.2-1.3,0.5L22,79.9v-1.1c0-1-0.8-1.8-1.8-1.8h-3.7v-7.3h12.8V77z"/>
							<path class="st1" d="M109.4,84.8l-6.8-6.8v-6.6c0-1-0.8-1.8-1.8-1.8H82.5c-1,0-1.8,0.8-1.8,1.8V78l-6.8,6.8l0,0
								c-0.3,0.3-0.5,0.8-0.5,1.3v22c0,1,0.8,1.8,1.8,1.8h33c1,0,1.8-0.8,1.8-1.8v-22C109.9,85.6,109.7,85.2,109.4,84.8L109.4,84.8z
								 M102.6,83.2l2.9,2.9l-2.9,2.9V83.2z M84.3,73.3H99v18.3H84.3V73.3z M96.4,95.3l-4.7,4.7l-4.7-4.7H96.4z M80.6,83.2V89l-2.9-2.9
								L80.6,83.2z M106.3,106.3H77V90.5l4.2,4.2c0,0,0,0,0,0l9.2,9.2c0.7,0.7,1.9,0.7,2.6,0l9.2-9.2c0,0,0,0,0,0l4.2-4.2V106.3z"/>
							<rect x="88" y="77" class="st1" width="7.3" height="3.7"/>
							<rect x="88" y="84.3" class="st1" width="7.3" height="3.7"/>
							<path class="st1" d="M67.8,65.2l-2.4-2.4l-2.6,2.6l2.4,2.4h-2.9v3.7h7.3c1,0,1.8-0.8,1.8-1.8v-7.3h-3.7V65.2z"/>
							<path class="st1" d="M47.1,65.4l-2.6-2.6l-2.4,2.4v-2.9h-3.7v7.3c0,1,0.8,1.8,1.8,1.8h7.3v-3.7h-2.9L47.1,65.4z"/>
							<path class="st1" d="M62.8,40.9l2.6,2.6l2.4-2.4V44h3.7v-7.3c0-1-0.8-1.8-1.8-1.8h-7.3v3.7h2.9L62.8,40.9z"/>
							<path class="st1" d="M47.6,34.8h-7.3c-1,0-1.8,0.8-1.8,1.8V44h3.7v-2.9l2.4,2.4l2.6-2.6l-2.4-2.4h2.9V34.8z"/>
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
			<div class="view"><p><a href="<?php echo site_url( '/good-vibes', 'http' ); ?>">View All Vibes</a></p></div>
			<h1 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">Good Vibes</h1>
			<h3 data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease" data-aos-duration="1200">The following content is meant to inform and inspire women who hustle and dream big.</h3>

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
			<div class="view"><p><a href="<?php echo site_url( '/good-press', 'http' ); ?>">View All Press</a></p></div>
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
