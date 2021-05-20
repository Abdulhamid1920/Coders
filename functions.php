<?php 


//user defined function
function load_css(){
    wp_register_style('style', get_stylesheet_uri(),[],false,'all');
    wp_enqueue_style('style');
    
} 

add_action('wp_enqueue_scripts','load_css');


//Theme Options

add_theme_support('menus');

//register menus
register_nav_menus(
	 array(
	 	'header-menu' => 'Header Menu Location',
         'mobile-menu'=> 'Mobile Menu Location',
         'Aside-left-menu' => 'Aside Menu Location',
         'Footer-menu'=> 'Footer menu Location'

	  )
);


?>