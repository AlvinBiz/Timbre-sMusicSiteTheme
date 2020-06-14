jQuery(document).ready(function(){

  var mobileMenu = jQuery('.menu-menu-1-container');
  var button = jQuery('.menu-toggle');
  var icon = jQuery('.site-header__menu-trigger')
  var toggled = 'off'


  button.on( 'click', function() {
    if(toggled == 'off') {
    mobileMenu.addClass('main-mobile-navigation').removeClass('menu-menu-1-container');
    icon.addClass('fa-times').removeClass('fa-bars');
    button.addClass('open');
    jQuery('.main-mobile-navigation').animate({left:'0'}, 160);
    toggled = 'on';
    button.attr("aria-expanded", "true");
  } else if (toggled == 'on') {
    jQuery('.main-mobile-navigation').animate(
      {left: '-200px'},
      160,
      function(){
        mobileMenu.addClass('menu-menu-1-container').removeClass('main-mobile-navigation');

      }
    );
      icon.addClass('fa-bars').removeClass('fa-times');
      button.removeClass('open');
      toggled = 'off';
      button.attr("aria-expanded", "false");
      }
    });

jQuery(window).resize(function() {
    if (jQuery(window).width() > 600 && toggled == 'on') {
   mobileMenu.addClass('menu-menu-1-container').removeClass('main-mobile-navigation');
   button.removeClass('open');
   toggled = 'off'
      }
    })
 })
