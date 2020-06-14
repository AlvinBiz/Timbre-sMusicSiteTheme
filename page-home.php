
<?php
get_header();
?>
	<div id="primary" class="content-area front-page-content">
		<main id="main" class="site-main">

		<?php
        while (have_posts()) {
            the_post(); ?>
				<div class="home-content">
					<div class="speaker icon-wrapper"><i class="fa fa-volume-up"></i></div>

					<div data-elementor-type="wp-page" data-elementor-id="82" class="elementor elementor-82" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-a897964 elementor-section-full_width elementor-section-height-full elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="a897964" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/player.vimeo.com\/video\/400076033?autoplay=1&amp;amp;playsinline=1&amp;amp;color&amp;amp;autopause=0&amp;amp;loop=1;muted=0&amp;amp;title=0&amp;amp;portrait=0&amp;amp;byline=0&amp;amp;background=1&amp;amp;controls=0&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
								<div class="elementor-background-video-container" data-vimeo-initialized="true">
												<div class="elementor-background-video-embed"></div>
												<iframe src="https://player.vimeo.com/video/400076033?muted=1&amp;autoplay=1&amp;loop=1&amp;transparent=0&amp;background=1&amp;app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="" title="Timbrecom header vid" data-ready="true" class="elementor-background-video-embed" id="iframe-background" style="width: 1636.55px; height: 100%;"></iframe>
												<div class="background-embed" class="" id="video-embed-image"></div>
											</div>
								<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-6f22fa5 elementor-column elementor-col-100 elementor-top-column" data-id="6f22fa5" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<section class="elementor-element elementor-element-43cf4b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="43cf4b5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-214b0ae elementor-column elementor-col-50 elementor-inner-column" data-id="214b0ae" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-4fb11e8 elementor-align-center elementor-widget__width-auto button-links elementor-widget elementor-widget-button" data-id="4fb11e8" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="https://timbre.bandcamp.com/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">listen to Sun &amp; Moon</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-2992369 elementor-column elementor-col-50 elementor-inner-column" data-id="2992369" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-2bd45e9 elementor-align-center elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="2bd45e9" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="<?php echo get_bloginfo('wpurl') . '/media'; ?>" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">watch videos</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
						</div>
			</div>
		</div>

				</div>

			<?php
        }; ?>


	 <div class="email-form">
		 <?php echo do_shortcode("[do_widget id=fanbridge_signup_widget-3]"); ?>
	<div>


		 <div class="album-content-area">
			 <main class="album-main">
					<header class="album-page-header">
						<h1>albums</h2>
					</header>

			 <?php
             wp_reset_postdata();

                 $albums = new WP_Query(array(
                     'post_type' => 'album',
                     'order' => 'ASC',
                 ));

             if ($albums) { ?>

		       <div class="album-section">
		         <div class="album-container">
		 			<?php
                    /* Start the Loop */
                    while ($albums->have_posts()) {
                        $albums->the_post(); ?>

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
           } wp_reset_postdata(); ?>

			 </main><!-- .album-main -->
		 </div><!-- .album-content-area -->
		 		<div id="front-page-bandsintown">
					<?php the_bandsintown_events(); ?>;
			  </div>
		</main>
	</div>


<?php
get_footer();
