<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="imaginestore.org" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>	<?php wp_title('');?></title>	
	<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/images/favicon.ico">		 
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/main.css">
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>	
	<div id="wrap">
	<header>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo-imagine" src="<?php bloginfo('template_url');?>/images/logo-imagine.png" alt="logo-imagine" width="128" height="51"/></a>
	<img id="logo-apr" src="<?php bloginfo('template_url');?>/images/logo-apr.png" alt="logo-apr"/>
	<div class="clear"></div>
	<nav>
    	<?php wp_nav_menu( array( 'theme_location' => 'nav1' ) ); ?>
    	<?php wp_nav_menu( array( 'theme_location' => 'nav2' ) ); ?>		
    	<?php wp_nav_menu( array( 'theme_location' => 'nav3' ) ); ?>		
	</nav>
	<div class="clear"></div>
	<?php 				
		if (is_home()) {?> 
		<div id="slides" class="clear"><img src="http://imaginestore.org/wp-content/uploads/2011/05/slide-ub_appointment.jpg">
		<div class="caption-black" style="bottom:0"><p>Blog</p></div></div><?php }
		
	
		elseif (is_404()) {?> 
		<div id="slides" class="clear"><img src="http://imaginestore.org/wp-content/themes/imagine/images/slide-home2.jpg">
		<div class="caption-black" style="bottom:0"><p>404 error</p></div></div><?php } 
	
		elseif ( get_post_meta($post->ID, 'header_slider', true) )
		{echo ( do_shortcode("[metaslider id=1631]")); }

		else { ?>
		<div id="slides" class="clear"><?php if(has_post_thumbnail()) {the_post_thumbnail();}
        else {echo '<img src="http://imaginestore.org/wp-content/themes/imagine/images/slide-home2.jpg">';}?>
        <?php if ( get_post_meta($post->ID, 'title_style', true) ) { ?><div class="caption-black" style="bottom:0"><p>
        <?php }else {     ?><div class="caption" style="bottom:0"><p><?php } ?>        
        
        <?php $title = get_post_meta($post->ID, 'title', true);
        $title_alt = get_post_meta($post->ID, 'title_alt', true);
        if ($title_alt) { 
        	echo $title_alt; 
        }
        elseif ($title) {
        	echo $title;
        }
         
        else { the_title(); } ?>
        </p>
        </div>            
    </div>
    <?php }?>
    </header>
    <section>