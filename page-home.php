<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
	<article class="home">
		<div id="highlight" >
			<div><a target="_blank" href="http://imaginestore.org/new-iphone-pre-booking-enquiry/"><img src="<?php bloginfo('template_url');?>/images/highlight-iphone5s.jpg" alt="iPhone 5s PreBooking enquiry"/></a></div>
			<div><a href="http://imaginestore.org/trade-in/"><img src="<?php bloginfo('template_url');?>/images/highlight-trade_in.jpg" alt="Mac Trade-in"/></a></div>
			<div><a href="http://imaginestore.org/training/iphoto-imovie-garageband/"><img src="<?php bloginfo('template_url');?>/images/highlight-get_trained.jpg" alt="iLife trainig with Imagine"/></a></div>
		</div>
		<div class="clear"></div>
		<div id="highlight2" >
			<div class="follow"><p>Follow us on <br />
			<a href="http://www.facebook.com/imaginebyample" target="_blank"><img src="<?php bloginfo('template_url');?>/images/icon-facebook.png" alt="icon-facebook" width="32" height="32"/></a>
			<!-- <a href="http://twitter.com/imaginestore" target="_blank"><img src="<?php bloginfo('template_url');?>/images/icon-twitter.png" alt="icon-twitter" width="32" height="32"/></a> -->
			<a href="http://imaginestore.org/blog/"><img src="<?php bloginfo('template_url');?>/images/icon-blog.png" alt="icon-blog" width="32" height="32"/></a>
			</p></div>
			<div class="highlight-nav">
				<nav>
    			<?php wp_nav_menu( array( 'theme_location' => 'home-subnav1' ) ); ?>
				</nav>
			</div>
			<div class="highlight-nav">
				<nav>
    			<?php wp_nav_menu( array( 'theme_location' => 'home-subnav2' ) ); ?>
				</nav>
			</div>
		</div>
		<div class="clear"></div>
		<div id="highlight3" >
			<div><a href="education/"><img src="<?php bloginfo('template_url');?>/images/highlight-small-education.jpg" alt="highlight-small-education" width="236" height="100"/></a></div>
			<div><a href="stores/"><img src="<?php bloginfo('template_url');?>/images/highlight-small-why_imagine.jpg" alt="highlight-small-why imagine" width="236" height="100"/></a></div>
			<div><a href="training/"><img src="<?php bloginfo('template_url');?>/images/highlights-small-training.jpg" alt="highlight-small-trainer" width="236" height="100"/></a></div>
		</div>
		<div class="clear"></div>
		</article>
		
<?php get_footer(); ?>
