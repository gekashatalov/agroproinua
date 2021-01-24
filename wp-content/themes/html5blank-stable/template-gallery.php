<?php /* Template Name: Галерея */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="single-page gallery-page">
			<div class="container">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php if( have_rows('master_gallery') ) { ?>
					<div class="row master-gall">
						<?php while ( have_rows('master_gallery') ) { the_row();?>
							<?php 
							$image = get_sub_field('master_img');
							if( !empty($image)){ 
							?>
								<a class="col-sm-6 col-md-4 grouped_elements lite-box-img" rel="group1" href="<?php echo $image['url']; ?>" title="<?php echo $image['alt']; ?>">
									<div class="master-gall-img" style="background-image: url(&quot;<?php echo $image['url']; ?>&quot;);">
										<div class="search-plus"></div>
										<?php if (get_sub_field('master_caption')){ ?>
											<div class="master-caption table-style">
												<div class="table-cell-style">
													<?php the_sub_field('master_caption'); ?>
												</div>
											</div>
										<?php } ?>
									</div>
								</a>
							<?php } ?>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
