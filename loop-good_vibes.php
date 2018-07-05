<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>

	<article class="vibe">
		<?php if ( has_post_thumbnail()) : ?>
			<figure>
				<?php $thumb = get_post_thumbnail_id(); ?>
				<img data-aos="fade-up" data-aos-offset="0" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="200"
					alt=""
					src="<?php echo wp_get_attachment_image_src($thumb, 's01')[0]; ?>"
					sizes="auto"
					data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 's02'); ?>"
					class="lazyload" />
			</figure>
		<?php endif; ?>
		<div class="description" data-aos="fade-in" data-aos-offset="200" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
			<div class="left">
				<h3><?php the_title(); ?></h3>
			</div>
			<div class="right">
				<p><?php the_excerpt(); ?></p>
			</div>
		</div>
	</article>

<?php endwhile; ?>
<?php endif; ?>
