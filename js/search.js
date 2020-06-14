class Search {

  constructor() {
    this.minorArrFilterButtons = jQuery(".comp-category-list > .minor-arrangement-type");
    this.mainArrFilterButtons = jQuery(".comp-category-list > .main-arrangement-type");
    this.links = jQuery(".composition");
    this.allButton = jQuery(".all-compositions");
    this.events();

  }

  events() {
    this.minorArrFilterButtons.on('click', ".post-type-button", this.changePosts.bind(this));
    this.mainArrFilterButtons.on('click', ".post-type-button", this.changePostTypes.bind(this));
    this.allButton.on('click', this.restorePosts.bind(this));
  }


  changePosts(button) {

    var arrangementType = button.target.innerText.toLowerCase();

    arrangementType = arrangementType.replace(/[^A-Z0-9]/ig, "-");

    var arrangementClasses = button.target.classList;

    this.links.each(function(i, link) {

            if (jQuery(link).hasClass(arrangementType)) {
              for(var i=0, len=arrangementClasses.length; i<len; i++) {
                if (jQuery(link).hasClass(arrangementClasses[i])) {
              jQuery(link).addClass('visible');
              jQuery(link).removeClass('hidden');
              }
            }
          } else {
              jQuery(link).addClass('hidden');
              jQuery(link).removeClass('visible');
            }
       }.bind(this))
    };

    changePostTypes(button) {

      var arrangementType = button.target.innerText.toLowerCase();

      arrangementType = arrangementType.replace(/[^A-Z0-9]/ig, "-");

      this.links.each(function(i, link) {

                if (jQuery(link).hasClass(arrangementType)) {
                  jQuery(link).addClass('visible');
                  jQuery(link).removeClass('hidden');
                } else {
                  jQuery(link).addClass('hidden');
                  jQuery(link).removeClass('visible');
                }
           }.bind(this))
      };

   restorePosts() {
     this.links.each(function(i, link) {
                 jQuery(link).addClass('visible');
                 jQuery(link).removeClass('hidden');
          }.bind(this))
    }

}


var search = new Search();
