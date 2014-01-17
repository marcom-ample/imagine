<?php
/*
Template Name:products > iPhone
*/
?>
<?php get_header(); ?>
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php get_sidebar(); ?>	

			
		<article class="post two-column products" id="post-<?php the_ID(); ?>">
		
		<a target="_blank" href="http://imaginestore.org/iphone5s/"><div class="thumb rightpad">
		<p><strong>iPhone 5s</strong>Forward thinking.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-iphone5s.jpg" alt="iPod Shuffle" />
		</div></a>		
		<a target="_blank" href="http://imaginestore.org/iphone5c/"><div class="thumb">
		<p><strong>iPhone 5c</strong>For the colorful.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-iphone5c.jpg" alt="iPod Nano" />
		</div></a>
<div class="clear"></div>
		</article>		
<?php get_footer(); ?>
