<?php


get_header();
?>

	<div class="media-content-area">

		<section class="video-main">
      <header class="media-section-header">
        <h1>videos</h2>
      </header>

        <div class="youtube-div">
          <?php echo do_shortcode("[video_gallery]") ?>
        </div>
    </section><!-- .video-main -->

    <section class="photo-main">

      <header class="media-section-header">
        <h1>photos</h2>
        </header>

      <div class="photo-gallery-div">
        <?php echo do_shortcode("[FinalTilesGallery id='1']") ?>
      </div>

  </section><!-- .video-main -->
	<div class=""
</div><!-- .media-content-area -->

<?php
get_footer();
