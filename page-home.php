<?php
/**
 * Template Name: Home Page
 * The template for displaying Home Page
 *
 * This is the template that displays home pages by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package seiko
 */

get_header(); ?>
 <div class="home-container">
      <div class="homepage-banner">
      	<div class="video-container">
			<iframe src="http://player.vimeo.com/video/183341493?background=1" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
			
			
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
	<div id="primary" class="content-area">
		<div cass="row">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				//remove comments from home page
				/*if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;*/



			endwhile; // End of the loop.
			?>

		

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!--/row-->
</div>

<?php
get_sidebar();
get_footer();
