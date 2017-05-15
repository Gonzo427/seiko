jQuery(document).ready(function(){
	var prod = jQuery('.home .entry-content .woocommerce.columns-2 ul li h2');
    /*jQuery(prod).wrap("<div class='prod-wrap'></div>");*/
    jQuery(prod).each(function(){
      var xthis = jQuery(this);
      
      // use .add() and .nextUntil() to get both the .section-header
      // and .section-item elements into a single set for our .wrapAll() call
      xthis.add(xthis.nextUntil(prod, 'div'))
        .wrapAll('<div class="section-container"></div>');
    });
    
    
});