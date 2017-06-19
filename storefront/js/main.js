jQuery(document).ready(function(){
	var prod = jQuery('.home .entry-content .woocommerce.columns-2 ul li');
	var prodTitle = jQuery('.home .entry-content .woocommerce.columns-2 ul li h2');
    
    jQuery(prod).addClass("slideIn");
    
    jQuery(prodTitle).each(function(){
      var thisItem = jQuery(this);
      // use .add() and .nextUntil() to get both the .section-header
      // and .section-item elements into a single set for our .wrapAll() call
      thisItem.add(thisItem.nextUntil(prodTitle, 'div'))
        .wrapAll('<div class="section-container"></div>');
    });   

    /* Add ScrollReveal */

		window.sr = ScrollReveal();
		sr.reveal('.slideIn', {reset: true});

});