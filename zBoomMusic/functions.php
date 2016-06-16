<?php

function zboom_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('post_thumbnails');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	
	//load text doamin
	
	load_theme_textdomain('zboom', get_template_directory_uri(). '/languages');
	
	
	if (function_exists(register_nav_menu)){
		register_nav_menu('main-menu',__('Main Menu', 'zboom'));
	}
	function read_more($word){
		$blog_content = explode(" ",get_the_content());
		$word_limit = array_slice($blog_content, 0, $word);
		echo implode(" ", $word_limit);
	}
}
add_action('after_setup_theme', 'zboom_theme_support');

/* 
==========================
Custom Post Type Slider
==========================
 */
function zboom_custom_post_type(){
	
	$slider_labels = array(
	'name' => 'Zboom Slider',
	'add_new'=>'Add Slider',
	'add_new_item'=>'Add New Slider',
	'not_found'=>'No Slider Found',
	''=>'',
	);
	$args = array(
	'labels' => $slider_labels,
	'public'=> true,
	'has_archieve' => true,
	'menu_position' => 5,
	'supports'=> array(
	'title',
	'thumbnail',
	)
	
	);
	register_post_type('zboomslider', $args);
}
add_action('init', 'zboom_custom_post_type');

/* 
==========================
Custom Post Type Feature Area
==========================
 */
function zboom_featured_area(){
	
	$slider_labels = array(
	'name' => 'Zboom Feature',
	'add_new'=>'Add Feature',
	'add_new_item'=>'Add New Feature',
	'not_found'=>'No Feature Found',
	''=>'',
	);
	$args = array(
	'labels' => $slider_labels,
	'public'=> true,
	'has_archieve' => true,
	'menu_position' => 10,
	'supports'=> array(
	'title',
	'editor',
	)
	
	);
	register_post_type('zboomfeature', $args);
}
add_action('init', 'zboom_featured_area');

/* 
==========================
Custom Post Type Sidebar
==========================
 */

 function awesome_sidebar(){
	 
	 register_sidebar(array(
	 'name'=>'Right Sidebar',
	 'description'=>'You can add right sidebar from here',
	 'id'=>'right-sidebar',
	 'before_widget'=>'<div class="box">',
	 'after_widget'=>'</div></div>',
	 'before_title'=>'<div class="heading"><h2>',
	 'after_title'=>'</h2></div><div class="content">'
	 ));
	 
	 register_sidebar(array(
	 'name'=>'Footer Widget',
	 'description'=>'You can add Footer sidebar from here',
	 'id'=>'footer-sidebar',
	 'before_widget'=>'<div class="col-1-4"><div class="wrap-col"><div class="box">',
	 'after_widget'=>'</div></div></div></div>',
	 'before_title'=>'<div class="heading"><h2>',
	 'after_title'=>'</h2></div><div class="content">'
	 ));
	 
	 register_sidebar(array(
	 'name'=>'Contact Widget',
	 'description'=>'You can add Contact sidebar from here',
	 'id'=>'contact-sidebar',
	 'before_widget'=>'<div class="box">',
	 'after_widget'=>'</div></div>',
	 'before_title'=>'<div class="heading"><h2>',
	 'after_title'=>'</h2></div><div class="content">'
	 ));	 
	 
 }
 add_action('widgets_init', 'awesome_sidebar');
 
 /* 
==========================
Custom Post Type Gallery
==========================
 */
function zboom_gallery(){
	
	$Gallery = array(
	'name' => 'Zboom Gallery',
	'add_new'=>'Add Photo',
	'add_new_item'=>'Add New photo',
	'not_found'=>'No photo Found',
	
	);
	$args = array(
	'labels' => $Gallery,
	'public'=> true,
	'has_archieve' => true,
	'menu_position' => 25,
	'supports'=> array(
	'title',
	'editor',
	'thumbnail',
	));
	register_post_type('zboomgallery', $args);
}
add_action('init', 'zboom_gallery');

/* 
==========================
zBoom Theme Option
==========================
 */
 
 require_once('includes/ReduxCore/framework.php');
 require_once('includes/sample/zboom-config.php');
 
 
 
 
?>