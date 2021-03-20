


/*

$.noConflict();
jQuery(document).ready(function(){
  jQuery("button").click(function(){
jQuery("p").text("jQuery is still working!");
  });
});




// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry after all images have loaded
var $grid = $('.grid').imagesLoaded( function() {
  $grid.masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  }); 
});


(function($){

    $(function() {

	// Code goes here
    console.log("Hello World");
		
    });

})(jQuery);
*/


(function($){
  "use strict";
  $(document).ready(function(){
      var $grid = $('.grid').imagesLoaded( function() {
           $grid.masonry({
            itemSelector: '.grid-item',
            percentPosition: true,
            columnWidth: '.grid-sizer'
           }); 
       })
  });
})(this.jQuery);

