<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<script>
			document.createElement( "picture" );
		</script>

	</head>
	<body>

		<section id="page" class="site-content">
			<div id="site-content-wrap" <?php body_class(); ?>>

				<header class="header">
					<div class="logo">
						<a href="<?php echo site_url( '/', 'http' ); ?>">
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="77.1px" height="70px" viewBox="0 0 77.1 70" style="enable-background:new 0 0 77.1 70;"
								 xml:space="preserve">
							<g>
								<g>
									<path class="st0" d="M10.4,20.9c-2.8,0-5.4-1.1-7.4-3.1C1.1,15.9,0,13.3,0,10.5c0-2.8,1.1-5.4,3.1-7.4C5,1.2,7.6,0.1,10.4,0.1
										c0.7,0,1.6,0.1,2.6,0.3c0.6,0.2,0.8,0.6,0.6,1.2l-0.8,2.7c-0.2,0.6-0.5,0.9-1.1,0.7c-0.5-0.1-0.9-0.2-1.4-0.2
										c-3.1,0-5.7,2.6-5.7,5.7c0,3.1,2.5,5.6,5.6,5.7v-2.4H8.9c-0.6,0-1-0.4-1-1v-2.4c0-0.6,0.4-1,1-1h5.2c0.6,0,1,0.4,1,1v8.8
										c0,0.6-0.3,0.9-0.9,1.1l-1.7,0.4C11.9,20.8,11.1,20.9,10.4,20.9z"/>
								</g>
								<g>
									<path class="st0" d="M27.4,0c2.8,0,5.4,1.1,7.3,3.1c1.9,2,3,4.6,3,7.4c0,2.8-1.1,5.5-3,7.4c-1.9,1.9-4.5,3.1-7.3,3.1
										c-2.8,0-5.4-1.1-7.3-3.1c-1.9-1.9-3-4.6-3-7.4c0-2.8,1.1-5.5,3-7.4C22,1.1,24.7,0,27.4,0z M27.4,16.3c3.1,0,5.6-2.6,5.6-5.8
										s-2.5-5.8-5.6-5.8c-3.1,0-5.6,2.6-5.6,5.8S24.4,16.3,27.4,16.3z"/>
								</g>
								<g>
									<path class="st0" d="M50.2,0c2.8,0,5.4,1.1,7.3,3.1c1.9,2,3,4.6,3,7.4c0,2.8-1.1,5.5-3,7.4C55.6,19.8,53,21,50.2,21
										c-2.8,0-5.4-1.1-7.3-3.1c-1.9-1.9-3-4.6-3-7.4c0-2.8,1.1-5.5,3-7.4C44.8,1.1,47.4,0,50.2,0z M50.2,16.3c3.1,0,5.6-2.6,5.6-5.8
										s-2.5-5.8-5.6-5.8c-3.1,0-5.6,2.6-5.6,5.8S47.1,16.3,50.2,16.3z"/>
								</g>
								<g>
									<path class="st0" d="M66.7,20.6h-2.8c-0.6,0-1-0.4-1-1V1.4c0-0.6,0.4-1,1-1h2.7c3,0,5.6,1.1,7.5,2.9c1.9,1.8,3,4.3,3,7.1
										c0,2.8-1.1,5.3-3,7.1C72.3,19.4,69.6,20.5,66.7,20.6z M67.6,15.8c2.8-0.5,4.8-2.6,4.8-5.3c0-2.7-1.9-4.8-4.8-5.3V15.8z"/>
								</g>
								<g>
									<path class="st0" d="M5.1,24.9c2.2,0,4.2,0.8,5.7,2.2c1.5,1.4,2.3,3.4,2.3,5.5c0,4.2-3.2,7.5-7.3,7.8v3.7c0,0.6-0.4,1-1,1H2
										c-0.6,0-1-0.4-1-1V25.8c0-0.6,0.4-1,1-1H5.1z M5.8,35.6c1.5-0.3,2.6-1.5,2.6-3c0-1.5-1.1-2.7-2.6-2.9V35.6z"/>
								</g>
								<g>
									<path class="st0" d="M27.9,32.6c0,2.3-1,4.4-2.7,5.9l3.2,5.4c0.4,0.7,0.1,1.2-0.7,1.2h-3.4c-0.5,0-0.9-0.2-1.2-0.7l-2.4-4l-0.3,0
										v3.7c0,0.6-0.4,1-1,1h-2.8c-0.6,0-1-0.4-1-1V25.9c0-0.6,0.4-1,1-1h3.1c2.2,0,4.2,0.8,5.7,2.2C27,28.6,27.9,30.5,27.9,32.6z
										 M20.5,35.6c1.5-0.3,2.6-1.5,2.6-3c0-1.5-1-2.7-2.6-2.9V35.6z"/>
								</g>
								<g>
									<path class="st0" d="M10.6,69.6c-2.8,0-5.4-1.1-7.3-2.9c-1.9-1.8-3-4.4-3-7.2c0-2.8,1.1-5.3,3-7.2c0.9-1,2-1.7,3.3-2.2
										c1.3-0.5,2.6-0.8,4-0.8c0.4,0,0.7,0,1.1,0.1c0.6,0.1,0.9,0.5,0.8,1.1L12,53.1c-0.1,0.6-0.5,0.8-1.1,0.8h-0.2
										c-3.2,0-5.7,2.4-5.7,5.6c0,3.1,2.5,5.5,5.7,5.5c0.2,0,0.4,0,0.6,0c0.4,0,0.6,0.2,0.8,0.8l0.5,2.6c0.1,0.6-0.1,1.1-0.8,1.2
										C11.4,69.6,11,69.6,10.6,69.6z"/>
								</g>
								<g>
									<path class="st0" d="M24.4,49c2.8,0,5.4,1.1,7.3,3.1c1.9,2,3,4.6,3,7.4c0,2.8-1.1,5.5-3,7.4c-1.9,1.9-4.5,3.1-7.3,3.1
										c-2.8,0-5.4-1.1-7.3-3.1c-1.9-1.9-3-4.6-3-7.4c0-2.8,1.1-5.5,3-7.4C19.1,50.2,21.7,49,24.4,49z M24.4,65.3c3.1,0,5.6-2.6,5.6-5.8
										c0-3.2-2.5-5.8-5.6-5.8c-3.1,0-5.6,2.6-5.6,5.8C18.9,62.7,21.4,65.3,24.4,65.3z"/>
								</g>
								<g>
									<path class="st0" d="M38.3,69.7c-1.3,0-2.4-1.1-2.4-2.4c0-1.4,1.1-2.4,2.4-2.4c1.4,0,2.4,1.1,2.4,2.4
										C40.7,68.6,39.6,69.7,38.3,69.7z"/>
								</g>
							</g>
							</svg>
						</a>
					</div>

					<div class="back">
						<ul>
							<li><a href="<?php echo site_url( '/about', 'http' ); ?>">About</a></li>
							<li><a href="<?php echo site_url( '/contact', 'http' ); ?>">Contact</a></li>
							<li><a href="<?php echo site_url( '/good-vibes', 'http' ); ?>">Good Vibes</a></li>
						</ul>
					</div>

					<div class="menu-modal">
						<ul>
							<li><a href="<?php echo site_url( '/', 'http' ); ?>">Home</a></li>
							<li><a href="<?php echo site_url( '/about', 'http' ); ?>">About</a></li>
							<li><a href="<?php echo site_url( '/contact', 'http' ); ?>">Contact</a></li>
							<li><a href="<?php echo site_url( '/good-vibes', 'http' ); ?>">Good Vibes</a></li>
						</ul>
					</div>
				</header>
