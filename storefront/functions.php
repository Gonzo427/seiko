<?
/**
 * Enqueue scripts and styles.
 */
function seiko_scripts() {
	wp_enqueue_style( 'seiko-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css',false,'1','all');
	wp_enqueue_style( 'simple-grid', get_stylesheet_directory_uri() . '/css/simple-grid.css',false,'1','all');
	

	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 


	wp_enqueue_script( 'seiko-navigation', get_stylesheet_directory_uri(). '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'seiko-skip-link-focus-fix', get_stylesheet_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'seiko-scrollReveal', get_stylesheet_directory_uri(). '/js/scrollReveal.min.js', array(), '3.3.4', true );

	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array(), '1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'seiko_scripts' );

/**
* CUSTOMIZING HOME PAGE
* BY REMOVING HOOKED FUNCTIONS ON TEMPLATE-HOMEPAGE.PHP
*/

function remove_homepage_content(){
	remove_action('homepage', 'storefront_product_categories', 20);
	remove_action('homepage', 'storefront_recent_products', 30);
	remove_action('homepage', 'storefront_featured_products', 40);
	remove_action('homepage', 'storefront_popular_products', 50);
	remove_action('homepage', 'storefront_on_sale_products', 60);
	remove_action('homepage', 'storefront_best_selling_products', 70);
	remove_action('storefront_header', 'storefront_header_cart', 60);
}
add_action('init', 'remove_homepage_content');
