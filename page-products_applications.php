<?php
/*
Template Name:products > applications
*/
?>
<?php get_header(); ?>
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php get_sidebar(); ?>	

			
		<article class="post two-column products" id="post-<?php the_ID(); ?>">
		
		<a href="http://imaginestore.org/products/applications/iwork"><div class="thumb rightpad">
		<p><strong>iWork</strong>Transforms the way you present your work to the world.</p><img src="<?php bloginfo('template_url');?>/images/products/thumb-iwork.jpg" alt="iWork">
		</div></a>
		
		<a href="http://imaginestore.org/products/applications/ilife"><div class="thumb">
		<p><strong>iLife</strong>ReCreate Life. Photos, movies, music and much more..</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-ilife.jpg" alt="iLife">
		</div></a>
<div class="clear"></div>
		<a href="http://imaginestore.org/products/applications/microsoft-office"><div class="thumb rightpad">
		<p><strong>Office for Mac</strong>Create great-looking documents in a snap</p>
		<img src="<?php bloginfo('template_url');?>/images/products/thumb-microsoft-office.jpg" alt="Office for Mac" >
		</div></a>
		<div class="clear"></div>
		</article>	
<?php get_footer(); ?>
