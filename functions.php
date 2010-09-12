<?php

	register_sidebar(array(
		'name'=> 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name'=> 'Header',
		'id' => 'header',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	add_action( 'init', 'register_my_menus' ); 
		function register_my_menus() {
			register_nav_menus(
			array(
				'menu-1' => __( 'Menu 1' )
			)
		);
	}

?>