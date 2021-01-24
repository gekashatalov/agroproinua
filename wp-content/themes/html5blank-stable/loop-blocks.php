<div class="blog-style-v2">
	<div class="container">
		<div class="row">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" class="col-md-4">
				<div class="inside-content">
					<div class="article-block-pic">
						<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) {?>
								<div class="post_thumbnail">
									<a class="article-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail();?>
									</a>
								</div>
							<?php } else { ?>
								
								<div class="post_thumbnail">
									<a class="article-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/img/no_img.jpeg" title="" alt="" />
									</a>
								</div>
								
							<?php } ?>
						<!-- /post thumbnail -->
					</div>
					<h2 class="post-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
				</div>
			</article>
			<!-- /article -->
		
			<?php endwhile; ?>
			
			<?php else: ?>

				<!-- article -->
				<article class="col-md-12">
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

			<?php endif; ?>
		</div>
	</div>
</div>

