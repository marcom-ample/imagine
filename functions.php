<?php
	//remove stuff from head
	remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
    remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
    remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
    remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
    remove_action( 'wp_head', 'index_rel_link' ); // index link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
    remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
    
	add_filter( 'index_rel_link', 'disable_stuff' );
	add_filter( 'parent_post_rel_link', 'disable_stuff' );
	add_filter( 'start_post_rel_link', 'disable_stuff' );
	add_filter( 'previous_post_rel_link', 'disable_stuff' );
	add_filter( 'next_post_rel_link', 'disable_stuff' );
		
	function disable_stuff( $data ) {
	return false;
	}
	
	//remove fancy box header	
	function remove_easy_fancybox() {

     remove_action('wp_head', 'easy_fancybox_enqueue_styles');
     remove_action('wp_head', 'easy_fancybox_enqueue_scripts');
     remove_action('wp_head', 'easy_fancybox');

     wp_dequeue_script( 'jquery.fancybox' );
     wp_dequeue_script( 'jquery.easing' );
     wp_dequeue_script( 'jquery.mousewheel' );
     wp_dequeue_script( 'jquery.metadata' );
	}

	add_action('wp_head', 'remove_easy_fancybox', 1);

	

	// Add RSS links to <head> section
	automatic_feed_links();
	
	// thumbnail support
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 720, 250, true ); // 50 pixels wide by 50 pixels tall, hard crop mode	
	add_action( 'after_setup_theme', 'theme_setup' );
	function theme_setup() {
	add_image_size( 'theme-custom-size', 240, 120, true );
	}	
	//jQuery Insert From Google
	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	function my_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, 		null);
	   wp_enqueue_script('jquery');
	}
	// Add body class to Visual Editor to match class used live
	add_editor_style('css/custom-editor-style.css');
	function mytheme_mce_settings( $initArray ){
	$initArray['body_class'] = 'post';
	return $initArray;
	}
add_filter( 'tiny_mce_before_init', 'mytheme_mce_settings' );


	
	// Menus

	function my_wp_nav_menu_args( $args = '' )
	{
	$args['container'] = false;
	return $args;
	} // function

	add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
	
		if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
  		  'nav1' => 'header navigation menu 1',
  		  'nav2' => 'header navigation menu 2',
  		  'nav3' => 'header navigation menu 3',
  		  'footer' => 'Footer Menu',
  		  'home-subnav1' => 'home - subnavigation 1',
  		  'home-subnav2' => 'home - subnavigation 2',

  		  )
  	);
}


	// breadcrumbs
	function dimox_breadcrumbs() {
 
  $delimiter = '&raquo;';
  $home = 'Home'; // text for the 'Home' link
  $before = '<li class="current">'; // tag before the current crumb
  $after = '</li>'; // tag after the current crumb
 
  if ( !is_home() && !is_front_page() || is_paged() ) {
 
    echo '<div id="breadcrumb">';
    global $post;
    $homeLink = get_bloginfo('url');
    echo '<li><a href="' . $homeLink . '">' . $home . '</a></li>';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ''));
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>';
      echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a><li>' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li>';
        echo $before . get_the_title() . $after;
      } else {
        echo '<li><a href="http://imaginestore.org/blog">Blog</a></li>';
        echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
    echo '</div>';
 
  }
} // end dimox_breadcrumbs()


	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
?>