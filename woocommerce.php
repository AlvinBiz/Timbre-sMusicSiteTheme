<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Timbre\'s_Underscores_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main woocommerce-main">
			<div class="cart-link"><a href="<?php echo get_site_url(null, '/cart') ?>">Go to Score Cart <i class="fa fa-shopping-cart"></i></a></div>

      <?php woocommerce_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="album-content-area">

		<main class="album-main">

			<header class="album-page-header">
				<h1>albums</h2>
			</header>

	<?php
				wp_reset_postdata();

						$albums = new WP_Query(array(
								'post_type' => 'album',
								'order' => 'DESC',
						));

				if ($albums->have_posts()) { ?>

			<div class="product-section album-section">
				<div class="product-container album-container">

		 <?php

							 /* Start the Loop */
							 while ($albums->have_posts()) {
									 $albums->the_post();
									 ?>

					<a class="product-link album-link" href="<?php the_field('album_link'); ?>">
						<img alt="<?php the_title() . " album" ?>" class="album-tmb" src="<?php echo the_post_thumbnail_url(); ?>">
						<div class="middle">
						 <div class="text">buy</div>
						</div>
					</a>

			<?php
							 } ?>
					</div>
				<div id='album-spinner' class='spinner'></div>
			</div>
		<?php
			} wp_reset_postdata(); ?>
			</main>
		</div>


		<div class="product-content-area poster-content-area">

			<main class="product-main poster-main">

				<header class="product-page-header poster-page-header">
					<h1>posters</h2>
				</header>

		<?php
					wp_reset_postdata();

							$posters = new WP_Query(array(
									'post_type' => 'poster',
									'order' => 'DESC',
							));

					if ($posters->have_posts()) { ?>

				<div class="product-section poster-section">
					<div class="product-container poster-container">
			 <?php
								 /* Start the Loop */
								 while ($posters->have_posts()) {
										 $posters->the_post();
										 ?>

						<a class="product-link poster-link" href="<?php the_field('link'); ?>">
							<img alt="<?php the_title() . " poster" ?>" class="product-tmb poster-tmb" src="<?php echo the_post_thumbnail_url(); ?>">
							<div class="middle">
							 <div class="text">buy</div>
							</div>
						</a>

				<?php
								 } ?>
					 </div>
					<div id='poster-spinner' class='spinner'></div>
				</div>
			<?php
				} wp_reset_postdata(); ?>
				</main>
			</div>

			<div class="product-content-area tshirt-content-area">

				<main class="product-main tshirt-main">

					<header class="product-page-header tshirt-page-header">
						<h1>t-shirts</h2>
					</header>

			<?php
						wp_reset_postdata();

								$tshirts = new WP_Query(array(
										'post_type' => 'tshirt',
										'order' => 'DESC',
								));

						if ($tshirts->have_posts()) { ?>

					<div class="product-section tshirt-section">
						<div class="product-container tshirt-container">
				 <?php
									 /* Start the Loop */
									 while ($tshirts->have_posts()) {
											 $tshirts->the_post();
											 ?>

							<a class="product-link tshirt-link" href="<?php the_field('link'); ?>">
								<img alt="<?php the_title() . " t-shirt" ?>" class="product-tmb tshirt-tmb" src="<?php echo the_post_thumbnail_url(); ?>">
								<div class="middle">
								 <div class="text">buy</div>
								</div>
							</a>

					<?php
									 } ?>
						 </div>
						<div id='product-spinner' class='spinner'></div>
					</div>
				<?php
			} else { echo '<div class="no-result"><h3>Nothing here yet!</h3><div>';}; wp_reset_postdata(); ?>
					</main>
				</div>
<?php
get_footer();
