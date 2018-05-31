<section class="grid">
	<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>

			<article class="frame">
				<a href="<?php the_permalink(); ?>" class="<?php echo $categories[0]; ?> ajax-project" data-category="<?php echo $categories[0]; ?>" data-id="<?php echo $post->ID; ?>">
					<?php $thumb = get_post_thumbnail_id(); ?>
					<div class="info">
						<div>
							<strong><?php the_title(); ?></strong><br>
							<?php echo get_field("description"); ?>
						</div>
					</div>
					<img
						alt=""
						src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
						sizes="auto"
						data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
						class="lazyload" />
				</a>
			</article>

		<?php endwhile; ?>
	<?php endif; ?>
</section>
