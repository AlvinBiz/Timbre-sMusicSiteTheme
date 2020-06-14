<?php

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main-single-composition" class="site-main">
			<div class="composition-archive-links">
				<a class="composition-archive-link" href="<?php echo site_url('/compositions') ?>"><?php
    echo htmlspecialchars("<< Back to Compositions");
?></a>
			</div>

		<?php
		while ( have_posts() ) :
			the_post();
?>


			<section class="comp--info-section">
				<div class="comp--info-container">
				<h2 class="comp--header"><?php the_title() ?></h2>
				<ul class="comp--info-list">
					<?php if(get_the_excerpt()) { echo '<li class="comp--arrangement">For ' . get_the_excerpt() .'</li>'; } ?>
					<?php if(get_field('release_date')) {echo '<li><p>Year of Composition: </P>' . get_field('release_date') .'</li>'; } ?>
				</ul>
				<?php if (get_field('listen')) {
				echo '<div class="comp--audio-container"><p>Listen: </p><div class="comp--audio"><a href="' . get_field('listen') . '">';
				if( preg_match('/bandcamp/', get_field('listen'))) { echo "<p>Bandcamp.com<p>"; }
				else { echo "<p>Listen to Audio<p>"; };
				echo '</a></div></div>'; }; ?>
				<div class="comp--buy-div">
					<div class="comp--buy-score-container">
						<p>Purchase: </p>
					<?php if(get_field('buy_score')) { echo '<div class="comp--buy"><a href="' . get_field('buy_score') .'"><p>Score</p><i class="fa fa-shopping-cart"></i></a></div>'; }
						else { echo "<h5>Not yet available!</h5>"; } ?>
					<?php if(get_field('buy_perusal_score')) { echo '<div class="comp--buy"><a href="' . get_field('buy_perusal_score') .'"><p>Perusal Score</p><i class="fa fa-shopping-cart"></i></a></div>'; } ?>
				 </div>
				</div>
			</div>
			</section>
			<section class="comp--media">
				<?php
				$link = get_field('watch');
				$remText = "watch?v=";
				$linkEmbed = str_replace($remText, "embed/", $link);
				if($link) {echo '<div class="comp--video"><iframe width="560" height="315" src="';
				if(preg_match('/watch\?v\=/', $link)) { echo $linkEmbed; }
				elseif (preg_match('/youtu\.be/', $link)) { echo str_replace(".be/", "be.com/embed/", $link); };
				echo '"></iframe></div>';
			  }
				?>
				<section class="comp--text-section">
					<?php if (get_the_content()) {
						?>
						<h3>The Text<h3>
						<div class="comp--text">
							<?php the_content(); ?>
						</div>
						<?php
					} else { ?>
						<div class="comp--no-results">
							<h4>No videos or text yet!</h4>
						</div>
					<?php }
					?>
				</section>
			</section>


<?php	endwhile;
		?>

		</main>
	</div>

<?php
get_footer();
