<?
/**
 * Enqueue scripts and styles.
 */
function seiko_scripts() {
	wp_enqueue_style( 'seiko-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css',false,'1','all');
	

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

/* REGISTER NEW MENUS */


function register_new_menus() {
    register_nav_menus( 
		array(
			'top-menu'=> __( 'Top Menu' ),
	    	'social-menu' => __('Social Menu')
		)	
    );
}
add_action( 'init', 'register_new_menus' );

 


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
	
}
add_action('init', 'remove_homepage_content');


/**
*REMOVING CONTENT FROM HEADER AND FOOTER
*/


function remove_header_footer_content(){
	remove_action('storefront_header', 'storefront_header_cart', 60);
	remove_action('storefront_footer', 'storefront_credit', 20);

}
add_action('init', 'remove_header_footer_content');


/**
* Change Search Button Text
*/

add_filter('get_search_form', 'my_search_form_text');
 
function my_search_form_text($text) {
     $text = str_replace('value="Search"', 'value="Go"', $text); //set as value the text you want
     return $text;
}

// remove short description from single product pages
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );	

//remove product tabs
function woo_remove_product_tabs( $tabs ) {
	unset( $tabs['description'] );
	unset( $tabs['reviews'] );
	unset( $tabs['additional_information'] );
	return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woocommerce_template_product_reviews() {
woocommerce_get_template( 'single-product-reviews.php' );
}

add_action( 'woocommerce_after_single_product_summary', 'comments_template', 50 );

// Add product description tab content in new position
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );
  function woocommerce_template_product_description() {
  	woocommerce_get_template( 'single-product/tabs/description.php' );
  }
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 5 );


//remove ADD TO CART buttons on home page 

	function remove_loop_button(){
	
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	}
	add_action('init', 'remove_loop_button');

	//and replace with READ MORE
	add_action('woocommerce_after_shop_loop_item','replace_add_to_cart');
	function replace_add_to_cart() {
	global $product;
	$link = $product->get_permalink();
	echo '<a rel="nofollow" href="' . esc_attr($link) . ' " class="button">Read more</a>';
	//do_shortcode('<br>[button link="' . esc_attr($link) . '"]Read more[/button]');
	}


//Add Login Button to TOP Menu
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );

function add_loginout_link( $items, $args ) {

   if (is_user_logged_in() && $args->theme_location == 'top-menu') {

       $items .= '<li><a href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">Log Out</a></li>';

   }

   elseif (!is_user_logged_in() && $args->theme_location == 'top-menu') {

       $items .= '<li><a href="' . get_permalink( woocommerce_get_page_id( 'myaccount' ) ) . '">Log In</a></li>';

   }

   return $items;

}
