<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package storefront
 */

?>
<?php
$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
?>
 <div class="home-container">
      <div class="homepage-banner">
      	<div class="video-container">
      		<div align="center"><img src="/wp-content/uploads/2017/05/home-billboard-1-1.jpg" alt="Smart Label Printers from Seiko" width="900" height="227"></div>
			<!--<iframe src="http://player.vimeo.com/video/183341493?background=1" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>-->
			
			
		</div>
		<div class="banner-content-container" data-scroll-speed="5"> 
			<h1>THE CHOICE IS YOURS</h1> 
			<div class="rule"></div> 
				<div> 
					<p>Smart Label Printers&mdash;you select the speed, resolution and printer connection you prefer.</p>
				</div> 
			<div> 
			<!--<a href="http://www.getolympus.com/us/en/e-m1-mark-ii.html"><button class="button btn-ghost"><span><span>SEE THE OM-D E-M1 MARK II</span></span></button></a> -->
			</div> 
		</div>
	</div>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="<?php storefront_homepage_content_styles(); ?>" data-featured-image="<?php echo $featured_image; ?>">
	<div class="col-full">
		<?php
		/**
		 * Functions hooked in to storefront_page add_action
		 *
		 * @hooked storefront_homepage_header      - 10
		 * @hooked storefront_page_content         - 20
		 * @hooked storefront_init_structured_data - 30
		 */
		do_action( 'storefront_homepage' );
		?>
	</div>
</div><!-- #post-## -->
</div> <!--home container-->
