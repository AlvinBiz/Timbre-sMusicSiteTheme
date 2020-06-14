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
		<main id="main" class="site-main">

      <?php the_bandsintown_events(); ?>;

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
