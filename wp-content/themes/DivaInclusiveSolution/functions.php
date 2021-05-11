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

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	acf_add_options_sub_page('Footer Links');
	
}

function remove_menus(){
	remove_menu_page( 'upload.php' ); //Media - imagens, vídeos, docs, etc...
	// remove_menu_page( 'themes.php' ); //Appearance - aparência (recomendo!)
	remove_menu_page( 'plugins.php' ); //Plugins (recomendo!)
	remove_menu_page( 'tools.php' ); //Tools - ferramentas (recomendo!)
	remove_menu_page( 'edit-comments.php' ); //Comments - comentários
	remove_menu_page( 'edit.php?post_type=acf-field-group' ); //Advaced Custom Field 
	remove_menu_page( 'admin.php?page=wpcf7' ); //remove contact-form 7 do menu do wp-admin
	remove_menu_page( 'theme-editor.php' ); // Editor de temas
	remove_menu_page( 'customize.php?return=%2Fwp-admin%2Fwidgets.php' ); // Editor de temas
	remove_menu_page(  'update-core.php' ); // Editor de temas
}
add_action( 'admin_menu', 'remove_menus' );