<?php get_header(); ?>
<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
<?php
$pagenum = $wp_query->query_vars;
$pagenum = $pagenum['paged'];

if (empty($pagenum)) {
$pagenum = 1;
}

query_posts("posts_per_page=10&paged=$pagenum");
?>


		<article class="post one-column">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<a class="blog_gist" href="<?php echo get_permalink(); ?>">
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<?php the_post_thumbnail( 'theme-custom-size', array('class' => 'alignleft')); ?>
		<div class="entry">
		<h2><?php the_title(); ?></h2>
		<time><?php the_time('F jS, Y') ?></time>
		<?php the_excerpt(); ?>
		</div>
		</div></a>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	</article>
			<?php edit_post_link('Edit this entry', '<p id="edit_entry">', '</p>'); ?>
<?php get_footer(); ?>

