<?php /* Category Template: Вывод блоками */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1 class="page-title"><?php single_cat_title(); ?></h1>

			<?php get_template_part('loop-blocks'); ?>

			<div class="container"><?php get_template_part('pagination'); ?></div>

			<?php if (category_description( $category ) !== '') : ?>

			<div class="block-4 block-style seo-block">
				<div class="container">
					<div class="seo-text">
						<?php echo category_description(); ?>
					</div>
				</div>
			</div>
			
			<?php endif; ?> 
			
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
