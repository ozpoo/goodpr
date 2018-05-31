<?php get_header(); ?>

	<main role="main" class="work-single">

		<?php while (have_posts()) : the_post(); ?>

			<div class="blackout"></div>

			<section class="wrap scrollPage full current">
				<div class="info">
					<div class="phrase">
						<h3><?php echo get_field("phrase"); ?></h3>
					</div>
					<div class="main">
						<?php $category = get_the_category(); ?>
						<p><span class="braille"><?php echo strtolower($category[0]->cat_name); ?></span></p>
						<strong><?php the_title(); ?></strong><br>
						<?php echo get_field("description"); ?>
					</div>
				</div>
			</section>

			<section class="wrap scrollPage full neighbour">
				<?php $image = get_post_thumbnail_id(); ?>
				<img
					alt=""
					src="<?php echo wp_get_attachment_image_src($image, 's02')[0]; ?>"
					sizes="auto"
					data-srcset="<?php echo wp_get_attachment_image_srcset($image, 's10'); ?>"
					class="lazyload" />
			</section>

			<?php if( have_rows("panels") ): while ( have_rows("panels") ) : the_row();?>

				<?php if( have_rows("content") ): while ( have_rows("content") ) : the_row();?>
					<?php $type = get_sub_field("type"); ?>
					<?php $text = get_sub_field("text"); ?>
					<?php $image = get_sub_field("image"); ?>
					<?php $video = get_sub_field("video"); ?>
				<?php endwhile; endif; ?>

				<?php if( have_rows("info") ): while ( have_rows("info") ) : the_row();?>
					<?php $text_color = get_sub_field("text_color"); ?>
					<?php $background_color = get_sub_field("background_color"); ?>
					<?php $caption = get_sub_field("caption"); ?>
				<?php endwhile; endif; ?>

				<?php if($type == "Image"): ?>
					<section class="wrap scrollPage full image center">
						<img
							alt=""
							src="<?php echo wp_get_attachment_image_src($image, 's02')[0]; ?>"
							sizes="auto"
							data-srcset="<?php echo wp_get_attachment_image_srcset($image, 's10'); ?>"
							class="lazyload" />
					</section>
				<?php elseif($type == "Text"): ?>
					<section class="wrap scrollPage full center text">
						<div class="wrap">
							<div class="pad">
								<?php echo $text; ?>
							</div>
						</div>
					</section>
				<?php elseif($type == "Video"): ?>
					<section class="wrap scrollPage full center video">
						<div class="pad">
							<div class="embed">
								<object width="560" height="315" data="http://www.youtube.com/v/<?php echo $video; ?>?modestbranding=0&autohide=1&showinfo=0&controls=1">
									<param name="src" value="http://www.youtube.com/v/<?php echo $video; ?>?modestbranding=0&autohide=1&showinfo=0&controls=1" />
								</object>
							</div>
						</div>
					</section>
				<?php endif; ?>
			<?php endwhile; endif; ?>

			<?php
				$post_id = $post->ID;
				if (isset($_GET['filter'])) {
					$cat = get_the_category();
					$current_cat_id = $cat[0]->cat_ID;
					$args = array(
						'category' => $current_cat_id,
						'orderby'  => 'menu_order',
						'order'    => 'DESC',
						'post_type' => 'work',
						'posts_per_page' => -1
					);
					$filter = "?filter=" . $_GET['filter'];
				} else {
					$args = array(
						'orderby'  => 'menu_order',
						'order'    => 'DESC',
						'post_type' => 'work',
						'posts_per_page' => -1
					);
				}

				$posts = get_posts( $args );
				$ids = array();
				foreach ( $posts as $thepost ) {
					$ids[] = $thepost->ID;
				}
				$thisindex = array_search( $post_id, $ids );
				$previd    = isset( $ids[ $thisindex - 1 ] ) ? $ids[ $thisindex - 1 ] : $ids[ count($ids)-1 ];
				$nextid    = isset( $ids[ $thisindex + 1 ] ) ? $ids[ $thisindex + 1 ] : $ids[0];
				if ( $previd ) {
					$prevPost = get_the_permalink($previd) . $filter;
				}
				if ( $nextid ) {
					$nextPost = get_the_permalink($nextid) . $filter;
				}
			?>

			<div class="pagination wrap scrollPage full center">
				<div class="next">
					<a href="<?php echo $nextPost; ?>">
						<!-- <?php $image = get_post_thumbnail_id($nextid); ?>
						<img
							draggable="false"
							alt=""
							src="<?php echo wp_get_attachment_image_src($image, 's02')[0]; ?>"
							sizes="auto"
							data-srcset="<?php echo wp_get_attachment_image_srcset($image, 's11'); ?>"
							class="lazyload" /> -->
							<h2><?php echo get_the_title($nextid); ?></h2>
							<p><?php echo get_field("phrase", $nextid); ?></p>
					</a>
				</div>
			</div>

		<?php endwhile; ?>

	</main>

	<script>
		(function ($, root, undefined) {

			$(function () {

				var $allVideos = $("object, embed, iframe");

				$(document).ready(function() {
				  init();
					animate();
				});

				$(window).resize(function() {
					sizeVideo();
				});

				var init = function() {
					initVideo();
					sizeVideo();
					initScrollPage();
				};

				var animate =  function() {
					requestAnimationFrame( animate );
					$scrollTop = $(document).scrollTop();
					updateBlackout($scrollTop);
					$lastScrollTop = $scrollTop;
				};

				var updateBlackout = function($scrollTop) {
					var $op = 1 - ($scrollTop / $(window).height());
					$(".blackout").css("opacity", $op);
				}

				var requestAnimationFrame = function() {
					return (
							window.requestAnimationFrame       ||
							window.webkitRequestAnimationFrame ||
							window.mozRequestAnimationFrame    ||
							window.oRequestAnimationFrame      ||
							window.msRequestAnimationFrame     ||
							function(/* function */ callback){
									window.setTimeout(callback, 1000 / 60);
							}
					);
				}();

				var initVideo = function() {
					$allVideos.each(function() {
						$(this).attr('data-aspectRatio', $(this).height() / $(this).width());
						$(this).removeAttr('height');
						$(this).removeAttr('width');
					});
				};

				var sizeVideo = function() {
					$allVideos.each(function() {
						var newWidth = $(this).closest(".embed").width();
						var newHeight = newWidth * $(this).attr('data-aspectRatio');
						if(newHeight > $(this).closest(".embed").height()) {
							newHeight = $(this).closest(".embed").height();
							newWidth = newHeight / $(this).attr('data-aspectRatio');
						}
				    $(this).width(newWidth);
				    $(this).height(newHeight);
				  });
				};

				var initScrollPage = function() {
					var $i = $(".scrollPage").length + 100;
					$(".scrollPage").each(function(){
						$(this).attr("style", "z-index:" + $i);
						$(this).attr("data-z", $i);
						$i--;
						$i--;
					});

					var $bz = $(".scrollPage.current").attr("data-z") - 1;
					$(".blackout").attr("style", "z-index:" + $bz);

					$(".scrollPage").on('click', function(){
						$('html, body').animate({
			        scrollTop: $(this).offset().top + $(this).height()
				    }, 660);
					});
				};

			});
		})(jQuery, this);
	</script>

<?php get_footer(); ?>
