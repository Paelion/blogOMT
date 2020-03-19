<?php

add_action('wp_enqueue_scripts', 'custom_style_scripts');
// j'intercale ma fonction sur le hook 'wp_enqueue_scripts'

function custom_style_scripts(){

// ajout de feuille de style
	wp_enqueue_style('custom-style',get_stylesheet_directory_uri() . '/customstyle.css');
// ajout de script
	wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/custom.js');

}

//declarer une nouvelle zone de menu

if ( function_exists('register_nav_menus') ){
	register_nav_menus(array(
		'menufooter' => 'Menu du bas'


	));
}

// declarer une nouvelle zone a widgets 

if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Ma zone a widgets perso',
		'id' => 'sidebar-perso',
		'before_widget' => '<div>',
		'after_widget' => '</div>'
	));
}