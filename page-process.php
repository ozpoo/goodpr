<?php get_header(); ?>

	<main role="main">

		<section>
			<h1><?php the_title(); ?></h1>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>

	</main>

	<script>
	(function ($, root, undefined) {

		$(function () {

			let backgrounds = ["bg01","bg02","bg03","bg04","bg05","bg06"];
			for(let i=0; i<backgrounds.length; i++) {
				$("body").removeClass(backgrounds[i]);
			}
			// $("body").addClass(backgrounds[Math.floor(Math.random() * Math.floor(backgrounds.length))]);
			$("body").addClass(backgrounds[3]);

		});

	})(jQuery, this);
	</script>

<?php get_footer(); ?>
