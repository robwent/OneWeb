/* Author:
Seth Warburton | @nternetinspired
*/

jQuery(document).ready(function(){

/* Mobile Menu - Seth Warburton @nternetinspired */
	jQuery("nav#menu").addClass('visuallyhidden');
	jQuery("a#mobileMenu").click(function(event) {	
	event.preventDefault();
	jQuery('nav#menu').toggleClass('visuallyhidden');
});	

	function menuSwitch(width) {
    width = jQuery(window).width();
    if (width > 720){
		jQuery('nav#menu').removeClass('visuallyhidden');
    }
}
menuSwitch();
	// Chris Coyier's elegant screensize test http://css-tricks.com/resolution-specific-stylesheets/
	jQuery(function() {
    menuSwitch(jQuery(window).width());
    jQuery(window).resize(function() {
        menuSwitch(jQuery(window).width());
    });
});	

	// Run Mathias Bynens jQuery placeholder plugin (see plugins.js)
	if (jQuery.fn.placeholder) {
		jQuery('input, textarea').placeholder();		
	}

});
