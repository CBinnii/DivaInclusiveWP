<?php 

/**
 * Template: Functions.php 
 */

// Removing the admin bar
remove_action('init', 'wp_admin_bar_init');

register_nav_menu( "Primary", "Menu" ); // Register the menu once

// Thumbnail support
add_theme_support('post-thumbnails', array('posts', 'page', 'lookbook'));
add_theme_support('widgets');

if ( function_exists('register_sidebar') ) {
	register_sidebar(
		array(
			'name' => 'Formulário Email',
			'id' => 'contact-form-email',
		)
	);
}
if ( function_exists('register_sidebar') ) {
	register_sidebar(
		array(
			'name' => 'Formulário Investidor',
			'id' => 'contact-form-investidor',
		)
	);
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(
		array(
			'name' => 'Formulário História',
			'id' => 'contact-form-historia',
		)
	);
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(
		array(
			'name' => 'Newsletter',
			'id' => 'contact-newsletter',
		)
	);
}
