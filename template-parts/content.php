
<article id="page-ar" <?php post_class(); ?>>
	<header class="entry-header page-header">
		<?php
			the_title( '<h1 class="entry-title page-title">', '</h1>' );
		?>
	</header>
	<?php if(get_the_post_thumbnail()) { ?>
	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php } ?>
	<div class="entry-content page-content">
		<?php
		the_content();

		echo get_field('arrangement');
		?>
	</div>
</article>
