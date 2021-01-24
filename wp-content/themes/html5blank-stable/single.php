<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="single-post">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<!-- post title -->
							<h1 class="page-title"><?php the_title(); ?></h1>
							<!-- /post title -->

							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<div class="news-thumb" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								</div>
							<?php endif; ?>
							<!-- /post thumbnail -->

							<?php the_content(); // Dynamic Content ?>

							<?php edit_post_link(); // Always handy to have Edit Post Links available ?>


						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

						</article>
						<!-- /article -->

					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
