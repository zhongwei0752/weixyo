jQuery(document).ready(function() {  
    // fade in each image individually as it's downloaded  
    jQuery('img').load(function() {  
        jQuery(this).fadeIn(500);  
    });  
});

jQuery(function(){
	//run masonry when page first loads
	jQuery(window).load(function() {
		jQuery('#content2').masonry({
			// options...
			itemSelector : '.mosaic',
			columnWidth: 320,
		}); 
	});
	//run masonry when window is resized
	 jQuery(window).resize(function() {
		jQuery('#content2').masonry({
			// options...
			itemSelector : '.mosaic',
			columnWidth: 320,
		});
	});
})

jQuery(function(){
	//run masonry when page first loads
	jQuery(window).load(function() {
		jQuery('#content').masonry({
			// options...
			itemSelector : '.mosaic',
			columnWidth: 320,
		}); 
	});
	//run masonry when window is resized
	 jQuery(window).resize(function() {
		jQuery('#content').masonry({
			// options...
			itemSelector : '.mosaic',
			columnWidth: 320,
		});
	});
})

jQuery(function() {
    jQuery(".rslides").responsiveSlides({
	  auto: true,             // Boolean: Animate automatically, true or false
	  speed: 2000,            // Integer: Speed of the transition, in milliseconds
	  timeout: 10000,         // Integer: Time between slide transitions, in milliseconds
	  random: false,          // Boolean: Randomize the order of the slides, true or false
	  pause: false,           // Boolean: Pause on hover, true or false
	  prevText: "Previous",   // String: Text for the "previous" button
	  nextText: "Next",       // String: Text for the "next" button
	  maxwidth: 1550,         // Integer: Max-width of the slideshow, in pixels
	  nav: false,
	  namespace: "transparent-btns"
	});
});