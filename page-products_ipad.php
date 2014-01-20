<?php
/*
Template Name:products > iPad
*/
?>
<?php get_header(); ?>
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php get_sidebar(); ?>	

			
		<article class="post two-column products" id="post-<?php the_ID(); ?>">
		
		<a class="popup" href="<?php echo esc_url( home_url( '/' ) ); ?>ipad-air/"><div class="thumb rightpad">
		<p><strong>iPad Air</strong>The power of lightness.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-ipad-air.jpg" alt="iPod Shuffle" />
		</div></a>		
		<a class="popup" href="<?php echo esc_url( home_url( '/' ) ); ?>ipad-mini-retina/"><div class="thumb">
		<p><strong>iPad Mini with Retina display</strong>Small wonder.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-ipad-mini-retina.jpg" alt="iPod Nano" />
		</div></a>
<div class="clear"></div>
		</article>		
<?php get_footer(); ?>
