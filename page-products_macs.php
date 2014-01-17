<?php
/*
Template Name:products > macs
*/
?>
<?php get_header(); ?>
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php get_sidebar(); ?>	

			
		<article class="post two-column products" id="post-<?php the_ID(); ?>">
			
		<a target="_blank" href="http://imaginestore.org/macbookpro-retina/"><div class="thumb rightpad">
		<p><strong>MacBook Pro <br />with Retina display</strong>The Best of everything.<br> In one notebook.</p>
		<img alt="MacBook Pro" src="<?php bloginfo('template_url');?>/images/products/thumb-macbook-pro.jpg">
		</div></a>
		<a href="http://imaginestore.org/products/mac/macbook-air"><div class="thumb">
		<p><strong>MacBook Air</strong>Rich in features.<br>Light in design.</p>
		<img alt="MacBook Air" src="<?php bloginfo('template_url');?>/images/products/thumb-macbook-air.jpg">
		</div></a>
		<a target="_blank" href="http://imaginestore.org/imac"><div class="thumb rightpad">
		<p><strong>iMac</strong>The Machine that has it all.</p>
		<img alt="iMac" src="<?php bloginfo('template_url');?>/images/products/thumb-imac.jpg">
		</div></a>
		<a href="http://imaginestore.org/products/mac/mac-pro"><div class="thumb">
		<p><strong>Mac Pro</strong>Towers above the rest. In Performance. In Power.<br>Everything.</p>
		<img alt="Mac Pro" src="<?php bloginfo('template_url');?>/images/products/thumb-mac-pro.jpg">
		</div></a>
<div class="clear"></div>		
		<a href="http://imaginestore.org/products/mac/mac-mini"><div class="thumb rightpad">
		<p><strong>Mac Mini</strong>Small in design.<br>Big in performance.</p>
		<img alt="Mac Mini" src="<?php bloginfo('template_url');?>/images/products/thumb-mac-mini.jpg">
		</div></a>

		<a href="http://imaginestore.org/products/mac/displays"><div class="thumb">
		<p><strong>LED Cinema Display</strong>Enhance your View.</p>
		<img alt="LED Cinema Display" src="<?php bloginfo('template_url');?>/images/products/thumb-led-cinema-display.jpg">
		</div></a>
<div class="clear"></div>
		</article>		
<?php get_footer(); ?>
