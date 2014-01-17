<?php get_header(); ?>
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php get_sidebar(); ?>	
			
		<article class="post two-column" id="post-<?php the_ID(); ?>">
			The page you're looking for doesn't exist.
		
		</article>
		<?php edit_post_link('Edit this entry', '<p id="edit_entry">', '</p>'); ?>
<?php get_footer(); ?>
