<?php
get_header();
?>

	<div id="sessionwork-arranging-primary" class="content-area">
		<main id="sessionwork-arranging-main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


		endwhile;
		?>

		</main>
	</div>

<?php
get_footer();
