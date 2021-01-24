<div class="blog-style">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container">
				<div class="row">
					<?php if ( has_post_thumbnail()) :?>
					<div class="col-md-3 article-block-pic">
						<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) :?>
								<div class="post_thumbnail">
									<a class="article-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail(array(800,800));?>
									</a>
								</div>
							<?php endif; ?>
						<!-- /post thumbnail -->
					</div>
					<?php endif; ?>
					<div class="col-md-<?php if ( has_post_thumbnail()) { ?>9<?php } else { ?>12<?php } ?> post_content">
						<h2 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="post-text"><?php the_content(); ?></div>
					</div>
				</div>
			</div>
		

		</article>
		<!-- /article -->

	<?php endwhile; ?>
</div>
<?php else: ?>

	<!-- article -->
	<article>
		<div class="container">
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</div>
	</article>
	<!-- /article -->

<?php endif; ?>
