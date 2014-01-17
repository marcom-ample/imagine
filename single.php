<?php get_header(); ?>
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php get_sidebar(); ?>	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="post two-column" id="post-<?php the_ID(); ?>">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<time><?php the_time('F jS, Y') ?></time>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<!-- <div class="fwd previous"><?php previous_post_link('%link'); ?></div>    <div class="fwd next"> <?php next_post_link('%link'); ?> </div> -->
			<div class="clear"></div>
			<?php comments_template(); ?>			
		</article>
	<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry', '<p id="edit_entry">', '</p>'); ?>	
<?php get_footer(); ?>