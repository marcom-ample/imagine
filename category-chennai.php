
<?php get_header(); ?>
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php get_sidebar(); ?>	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post two-column" id="post-<?php the_ID(); ?>">
				<h2>Vacancies in Chennai</h2>
		
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
		</article>
		<?php edit_post_link('Edit this entry', '<p id="edit_entry">', '</p>'); ?>
		<?php endwhile; endif; ?>		
<?php get_footer(); ?>
