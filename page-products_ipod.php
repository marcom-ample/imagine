<?php
/*
Template Name:products > ipod
*/
?>
<?php get_header(); ?>
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php get_sidebar(); ?>	

			
		<article class="post two-column products" id="post-<?php the_ID(); ?>">
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/ipod/shuffle"><div class="thumb rightpad">
		<p><strong>iPod shuffle</strong>Your musical accessory.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-ipod-shuffle.jpg" alt="iPod Shuffle" />
		</div></a>		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/ipod/nano"><div class="thumb">
		<p><strong>iPod nano</strong>Small. Sleek. Splendid.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-ipod-nano.jpg" alt="iPod Nano" />
		</div></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/ipod/classic"><div class="thumb rightpad">
		<p><strong>iPod classic</strong>Stay entertained.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-ipod-classic.jpg" alt="iPod Classic" />
		</div></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/ipod/touch"><div class="thumb">
		<p><strong>iPod touch</strong>As good as it looks.</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-ipod-touch.jpg" alt="iPod touch" />
		</div></a>
<div class="clear"></div>
		</article>		
<?php get_footer(); ?>