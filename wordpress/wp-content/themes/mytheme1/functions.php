<?php 


function learningWordPress_resources(){

wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','learningWordPress_resources');




// get top ancestor
function get_top_ancestor_id(){
	
	global $post;
	
	if($post->post_parent){
		$ancestors=array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	return $post->ID;
}

//Does page have Children
function has_children(){
	
	global $post;
	
	$pages = get_pages('child_of='. $post->ID);
	
	return count( $pages );
	
}
//Theme setup
function learningWordPress_setup(){
	// navigaton menus
register_nav_menus(array(
'primary'=>__('Primary Menu'),
'footer'=>__('Footer Menu'),
));


//add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail',180,120,true);
	

}

add_action('after_setup_theme','learningWordPress_setup');
//add post format support
add_theme_support('post-formats',array('aside','gallery','link','image'
,'quote','status','video','audio','chat'));


// add our widget location
function ourWidgetsInit(){
	
		//add widgets
	register_sidebar(array(
	'name'           => 'Sidebar',
	'id'             => 'sidebar1',
	'before_widget'  => '<div class="widget-item">',
	'after_widget'   => '</div>',
	'before_title'   => '<h2 class="my_special_class">',
    'after_title'    => '</h2>',
	
	));
		register_sidebar(array(
	'name'           => 'Footer area 1',
	'id'             => 'footer1',
	'before_widget'  => '<div class="widget-item">',
	'after_widget'   => '</div>',
	'before_title'   => '<h2 class="my_special_class">',
    'after_title'    => '</h2>',
	
	));
			register_sidebar(array(
	'name'           => 'Header area1',
	'id'             => 'header1',
	'before_widget'  => '<div>',
	'after_widget'   => '</div>',
	'before_title'   => '<h2 >',
    'after_title'    => '</h2>',
	
	));
}
add_action('widgets_init','ourWidgetsInit');















?>

