<?php /* Category Template: Вывод покатегорий */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="children-cat-template">
			<div class="container">
				<div class="block-title"><h1><?php single_cat_title(); ?></h1></div>

				<?php 
				if (is_category()) {
					$this_category = get_category($cat);
					if (get_category_children($this_category->cat_ID) != "") {
						
						$childcategories = get_categories(array(
							'orderyby' => 'name',
							'hide_empty' => false,
							'parent' => $this_category->cat_ID
							));
						foreach($childcategories as $category) {
						
							echo '<div class="children-cat inline-block">';
								echo '
									<div class="main-category-img">
										<a href="' . get_category_link( $category->term_id ) . '"> <img src="';

										if (z_taxonomy_image_url($category->term_id) != "") { 
											echo '' . z_taxonomy_image_url($category->term_id). '';
										} else {
											echo '' . get_template_directory_uri() . '/img/no_img.jpeg';
										}
										
								echo '" title="" alt="" /></a>
									</div>
									<div class="category-link">
										<a href="' . get_category_link( $category->term_id ) . '">' . $category->name.'</a>
									</div>
									';
							echo '</div>';
						}
					}
				}
				?>
			</div>
		</section>
		<!-- /section -->
		
		<?php if (category_description( $category ) !== '') : ?>

		<div class="block-4 block-style seo-block">
			<div class="container">
				<div class="seo-text">
					<?php echo category_description(); ?>
				</div>
			</div>
		</div>
		
		<?php endif; ?> 
		
	</main>

<?php get_footer(); ?>

