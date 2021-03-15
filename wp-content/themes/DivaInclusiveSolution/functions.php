<?php 

/**
 * Template: Functions.php 
 */

/**
 * 
 * Paginate
 *
 **/
require_once get_template_directory() . '/lib/paginate.php';

// Removing the admin bar
remove_action('init', 'wp_admin_bar_init');

register_nav_menu( "Primary", "Menu" ); // Register the menu once

// Thumbnail support
add_theme_support('post-thumbnails', array('page', 'post', 'lookbook'));
add_theme_support('widgets');

if ( function_exists('register_sidebar') ) {
	register_sidebar(
		array(
			'name' => 'Newsletter',
			'id' => 'contact-newsletter',
		)
	);
}

// if( function_exists('acf_add_options_page') ) {

// 	acf_add_options_page();
// 	acf_add_options_sub_page('VÅRE ADRESSER');
// }

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	acf_add_options_sub_page('Footer Links');
	
}