<?php
/**
 * Standard ultimate posts widget template
 *
 * @version     2.0.0
 */
?>


<div class="block-5 block-style block-blog hfeed">
	<div class="container">
		<div class="row">
			<?php if ($upw_query->have_posts()) : ?>

				<?php while ($upw_query->have_posts()) : $upw_query->the_post(); ?>

					<?php $current_post = ($post->ID == $current_post_id && is_single()) ? 'active' : ''; ?>
					<div class="col-md-4 block-blog-items">
						<article <?php post_class($current_post); ?>>
							<?php if (current_theme_supports('post-thumbnails') && $instance['show_thumbnail'] && has_post_thumbnail()) : ?>
								<div class="block-blog-items-image">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($instance['thumb_size']); ?></a>
								</div>
							<?php endif; ?>
							<div class="block-blog-items-content">
								<div class="block-blog-items-content-date">
									<time class="published" datetime="<?php echo get_the_time('c'); ?>">
										<a href="<?php the_permalink(); ?>"><?php echo get_the_time($instance['date_format']); ?></a>
									</time>
								</div>
								<div class="block-blog-items-content-text">
									<div class="block-blog-items-content-text-fix">
										<a href="<?php the_permalink(); ?>"><?php html5wp_excerpt('html5wp_index'); ?></a>								
									</div>
								</div>
							</div>
						</article>
					</div>  
				<?php endwhile; ?>

			<?php else : ?>

				<p class="upw-not-found">
				  <?php _e('Нет материалов.', 'upw'); ?>
				</p>
			
			<?php endif; ?>
		</div>  
	</div>
</div>
