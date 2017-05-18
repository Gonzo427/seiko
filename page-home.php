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

			<!--<div class="products-container">
				<div class="quad-one">
					<div class="grid-2-2 bottom-content no-mobile static static-mobile visible ">
						<img alt="" src="http://www.getolympus.com/media/wysiwyg/home/homepage-large01_4.jpg" class="img-flash">
						<div class="panel"></div>
						<div class="content-container">
							<div class="content-inner">
								<h2>CONGRATS OM-D E-M1 MARK II</h2>
								<div class="rule">&nbsp;</div>
								<p>Winner of DP Review's Gold Award and named Imaging Resource's Camera of the Year (Best Overall &amp; Best Professional Mirrorless).</p>
								<a class="view-more" href="http://www.getolympus.com/us/en/e-m1-mark-ii.html"> 
									<button class="button btn-medium button-secondary"><span><span>SEE WHAT MAKES IT A WINNER</span></span></button>
								</a>
							</div>
						</div>
					</div>

					<div class="grid-1-2 left-content mobile visible ">
					          <img data-src="http://www.getolympus.com/media/wysiwyg/home/homepage-medium03_2.jpg" alt="" src="http://www.getolympus.com/media/wysiwyg/home/homepage-medium03_2.jpg" class="lazy-loaded">
					          <img class="mobile" data-src="http://www.getolympus.com/media/wysiwyg/home/shophome-small03-mobile.jpg" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
					          <div class="panel"></div>
					          <div class="content-container">
					               <div class="content-inner">
					                     <h3>UP TO $300 OFF LENSES!</h3>
					                    <div class="rule"></div>
					                    <p>Save big on select M.Zuiko Lenses with your PEN or OM-D purchase.</p>
					                    <a class="view-more" href="http://www.getolympus.com/us/en/lens_promotion">
					                    	<button class="button btn-medium button-secondary"><span><span>BUNDLE &amp; SAVE</span></span></button>
					                    </a>
					               </div>
					         	</div>
					</div> 
				</div>
				<div class="quad-two">




					<div class="grid-2-2 bottom-content no-mobile static static-mobile visible"><img alt="" src="http://www.getolympus.com/media/wysiwyg/home/homepage-largeE-M10MkII_KVb.jpg" class="">
					<div class="panel"></div><div class="content-container">
					<div class="content-inner">
					<h2>SAVE NOW ON OM-D</h2>
					<div class="rule">&nbsp;</div>
					<p>Save $100 on the easy-to-use E-M10 Mark II or weatherproof E-M5 Mark II.</p>
					<a class="view-more" href="http://www.getolympus.com/us/en/featured_weekly_deals"> <button class="button btn-medium button-secondary"><span><span>VIEW ALL APRIL DEALS</span></span></button> </a></div>
					</div>
					</div>


				</div>
				<div class="quad-three">
					<div class="grid-2-2 bottom-content no-mobile visible"><img alt="" data-src="http://www.getolympus.com/media/wysiwyg/home/free-brunch-lg.jpg" src="http://www.getolympus.com/media/wysiwyg/home/free-brunch-lg.jpg" class="lazy-loaded">
					<div class="panel"></div><div class="content-container">
					<div class="content-inner">
					<h2>FREE* BRUNCH!</h2>
					<div class="rule">&nbsp;</div>
					<p>Our new PEN E-PL8 has beautiful style, a tilt touch LCD monitor, and built-in Wi-Fi for instant sharing, perfect for your FREE* Brunch for Two with Purchase!</p>
					<p class="view-more" style="font-size: 12px;">* Up to a $50 value (USD) for two people.</p>
					<a class="view-more" href="http://www.getolympus.com/us/en/brunch"> <button class="button btn-medium button-secondary"><span><span>LEARN MORE</span></span></button> </a></div>
					</div>
					</div>
					
				</div>


			
				<div class="quad-one">
					

					<div class="grid-2-2 bottom-content no-mobile static static-mobile visible"><img alt="" data-src="http://www.getolympus.com/media/wysiwyg/home/homepage-large03_5.jpg" src="http://www.getolympus.com/media/wysiwyg/home/homepage-large03_5.jpg" class="lazy-loaded">
					<div class="panel"></div><div class="content-container">
					<div class="content-inner">
					<h2>MEET THE PROS</h2>
					<div class="rule">&nbsp;</div>
					<p>Alex is a nature, commercial, and fine art photographer from Tempe, Arizona.</p>
					<a class="view-more" href="http://www.getolympus.com/us/en/visionaries/alex_mcclure"> <button class="button btn-medium button-secondary"><span><span>VIEW ALEX’S WORK</span></span></button> </a></div>
					</div>
					</div>
				</div>
				<div class="quad-three">
					<div class="grid-2-2 bottom-content no-mobile static static-mobile visible"><img alt="" src="http://www.getolympus.com/media/wysiwyg/home/homepage-large02_5.jpg" class="">
					<div class="panel"></div><div class="content-container">
					<div class="content-inner">
					<h2>PRO ADVANTAGE COMMITMENT</h2>
					<div class="rule">&nbsp;</div>
					<p>Includes expedited service, complementary equipment loan, priority phone support and more.</p>
					<a class="view-more" href="http://www.getolympus.com/us/en/proadvantage"> <button class="button btn-medium button-secondary"><span><span>LEARN MORE</span></span></button> </a></div>
					</div>
					</div>



					<div class="grid-1-2 right-content mobile"><img data-src="http://www.getolympus.com/media/wysiwyg/home/homepage-medium01_4.jpg" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"><img class="mobile" alt="" data-src="http://www.getolympus.com/media/wysiwyg/home/homepage-medium01-mobile_4.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
					<div class="panel"></div><div class="content-container">
					<div class="content-inner">
					<h3>ONE GREAT NEW LINEUP</h3>
					<div class="rule">&nbsp;</div>
					<p>Three more reasons why our M.Zuiko lens family is unmatched.</p>

					<a class="view-more" href="http://www.getolympus.com/us/en/lenses.html"> <button class="button btn-medium button-secondary"><span><span>EXPLORE LENS LINEUP</span></span></button> </a></div>
					</div>
					</div>
					     
				</div>

				


			</div>--><!--.products-container-->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!--/row-->
</div>

<?php
get_sidebar();
get_footer();
