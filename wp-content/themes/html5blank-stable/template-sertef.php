<?php /* Template Name: Сертификаты */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="single-page certificate-page">
			<div class="container">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php if( have_rows('master_gallery') ) { ?>
					<div class="master-gall">
						<?php while ( have_rows('master_gallery') ) { the_row();?>
							<?php 
							$image = get_sub_field('master_img');
							if( !empty($image)){ 
							?>
								<div class="certef-items">
									<a class="grouped_elements lite-box-img" rel="group1" href="<?php echo $image['url']; ?>" title="<?php echo $image['alt']; ?>">
										<div class="master-gall-img" style="background-image: url(&quot;<?php echo $image['url']; ?>&quot;);">
											<div class="search-plus"></div>
										</div>
									</a>
									<?php if (get_sub_field('master_caption')){ ?>
										<div class="certef-caption">
											<?php the_sub_field('master_caption'); ?>
										</div>
									<?php } ?>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
