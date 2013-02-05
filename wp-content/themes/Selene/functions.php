<?php

 include 'theme_options.php';
 include 'guide.php';

if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'Sidebar',
    'before_widget' => '<li class="sidebox ">',
    'after_widget' => '</li>',
	'before_title' => '<h3 class="sidetitl">',
    'after_title' => '</h3>',
	));

register_sidebar(array(
	'name' => 'Footer',
    'before_widget' => '<li class="botwid">',
    'after_widget' => '</li>',
	'before_title' => '<h3 class="bothead">',
    'after_title' => '</h3>',
    ));		
	
register_nav_menus( array(
		'primary' => __( 'Primary Navigation', '' ),
		'secondary' => __( 'Secondary Navigation', '' ),
	));	
	
function new_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
return '<a href="'. get_permalink($post->ID) . '">' . '&nbsp;&nbsp;[ Read More ]' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'sele_post', 310, 150, true );
	add_image_size( 'sele_slide', 450, 200, true ); 
	add_image_size( 'sele_thumb', 80, 60, true ); 
}

function sele_post_image(){
if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'sele_post', array('class' => 'postimg') );
} else {
?>
<img class="postimg" src="<?php bloginfo('template_directory'); ?>/images/dummy.jpg" alt="" />
<?php
};
}

function sele_thumb_image(){
if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'sele_thumb', array('class' => 'thumbim') );
} else {
?>
<img class="thumbim" src="<?php bloginfo('template_directory'); ?>/images/dummy.jpg" alt="" />
<?php
};
}

function sele_slide_image(){
if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'sele_slide', array('class' => 'slimg') );
} else { 
?>
<img class="slimg" src="<?php bloginfo('template_directory'); ?>/images/dummy.jpg" alt="" />
<?php
};
}