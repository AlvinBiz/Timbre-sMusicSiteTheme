
jQuery(document).ready(function(){

    console.log('video-fix working')

    jQuery('#iframe-background').attr("allow", "autoplay; fullscreen");
    jQuery('#iframe-background').attr("src", "https://player.vimeo.com/video/400076033?muted=1&amp;autoplay=1&amp;playsinline=1&amp;color&amp;autopause=0&amp;loop=1;title=0&amp;portrait=0&amp;byline=0&amp;background=1&amp;controls=0");


      var backgroundImg = jQuery('#video-embed-image');
      var iframe = jQuery('#iframe-background');
      var player = new Vimeo.Player(iframe);
      var volumeStatus = 'off';
      var speaker = jQuery('.icon-wrapper');

        player.on('play', function() {
            backgroundImg.fadeOut(1000);
            backgroundImg.addClass('faded-out')
        });

        jQuery('body').children().on('click', '.icon-wrapper', function() {
          if (volumeStatus == 'off') {
              volumeStatus = 'on';
              player.setVolume(1);
              speaker.html('<i class="fa fa-volume-off"></i>')
          } else if (volumeStatus == 'on') {
              volumeStatus = 'off';
              player.setVolume(0);
              speaker.html('<i class="fa fa-volume-up"></i>')
          }
          });
      });
