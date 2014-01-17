<?php
/*
Template Name:products
*/
?>
<?php get_header(); ?>
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php get_sidebar(); ?>	
		<article class="post two-column products" id="post-<?php the_ID(); ?>">
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/mac"><div class="thumb rightpad">
		<p><strong>Mac</strong>The complete Mac range.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-mac.jpg" alt="Mac" >
		</div></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/ipod"><div class="thumb">
		<p><strong>iPod</strong>Carry your music everywhere.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-ipod.jpg" alt="iPod">
		</div></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/iphone"><div class="thumb rightpad">
		<p><strong>iPhone</strong>Calling just got better.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-iphone.jpg" alt="iPhone" >
		</div></a>
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/ipad"><div class="thumb">
		<p><strong>iPad</strong>Your sleek performer.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-ipad.jpg" alt="iPad">
		</div></a>
<div class="clear"></div>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/applications"><div class="thumb rightpad">
		<p><strong>Applications</strong>The support system.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-applications.jpg" alt="Applications">
		</div></a>
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>accessory-catalogue/" target="_blank"><div class="thumb">
		<p><strong>Accessories</strong>All that you need.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-accessories.jpg" alt="Accessories">
		</div></a>
<div class="clear"></div>
		</article>		
<?php get_footer(); ?>
