<?php


get_header();

?>


	<div class="album-content-area">

		<main class="album-main">

      <header class="album-page-header">
        <h1>albums</h2>
      </header>


		<?php if ( have_posts() ) { ?>

      <div class="album-section">
        <div class="album-container">
			<?php
			/* Start the Loop */
			while ( have_posts() ) {
				the_post(); ?>


          <a class="product-link album-link" href="<?php the_field('album_link'); ?>">
            <img alt="<?php the_title() . " album" ?>" class="album-tmb" src="<?php echo the_post_thumbnail_url(); ?>">
						<div class="middle">
						  <div class="text">listen</div>
						</div>
					</a>

      <?php
    } ?>
        </div>
      </div>
    <?php
  }
    ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
