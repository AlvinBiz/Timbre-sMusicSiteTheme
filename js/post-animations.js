jQuery(document).ready(function() {

  jQuery('.product-link').addClass( 'hidden' );
  jQuery('.woocommerce-loop-product__link').find('img').addClass( 'hidden' );
  var albumElements;
  var woocommerceElements;
  var elements;
  var windowHeight;

  function init() {
    elements = document.querySelectorAll('.hidden');
    windowHeight = window.innerHeight;
    elements.className += 'hidden';
  }

  function checkPosition() {
    for (var i = 0; i < elements.length; i++) {
      var positionFromTop = elements[i].getBoundingClientRect().top;
      function timedFade() {

          var element = elements[i];

          var number = i + 1;

          var time = number * 300;

      if (positionFromTop - windowHeight <= 0) {
        setTimeout(function () {
          element.classList.add('fade-in-element');
          element.classList.remove('hidden');
          if(element.classList.contains('album-link'))
          {document.getElementById("album-spinner").classList.remove("spinner")};
          if(element.classList.contains('poster-link'))
          {document.getElementById("poster-spinner").classList.remove("spinner")};
          if(element.classList.contains('tshirt-link'))
          {document.getElementById("tshirt-spinner").classList.remove("spinner")};
        }, time);
       }
      };
      timedFade();
    }
  }


  window.addEventListener('scroll', checkPosition);
  window.addEventListener('load', checkPosition);

  init();
  checkPosition();


});
