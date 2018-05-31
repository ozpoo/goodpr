<?php $count = 1; ?>
<?php if (have_posts()): ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php $thumb = get_post_thumbnail_id(); ?>

		<article class="news-article">
			<?php $categories = wp_get_post_terms($post->ID, 'news_category', array("fields" => "names")); ?>
			<p><small><?php echo get_the_date(); ?></small></p>
			<h5 class="news-title">
				<a href="<?php the_permalink(); ?>" data-category="<?php echo $categories[0]; ?>">
					<?php the_title(); ?>
				</a>
			</h5>
			<div class="news-content">
				<p class="news-excerpt">
					<?php the_excerpt(); ?>
				</p>
				<p class="news-categories">
					<small><?php echo $categories[0]; ?></small>
					<i class="fas fa-space-shuttle"></i>
				</p>
			</div>
		</article>

	<?php endwhile; ?>
<?php endif; ?>
