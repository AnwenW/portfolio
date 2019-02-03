<?php

/* N.B. -- Do not close the php tag here! It will close automatically when file ends, and this avoids issues if accidentally leave blank space after closing tag.
-- Do not put html or blank spaces before opening php tag in functions.php!
-- In WP repository this is specified as an optional file, but really it's necessary! Keep in base themes folder. */

/*
=========================================
INCLUDE STYLESHEET(S) + SCRIPTS
(in one function, rather than separate?)
=========================================
*/

function set_portfolio_style_script() { // N.B. Use unique function names
  wp_enqueue_style('main_stylesheet', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
  wp_enqueue_script('main_script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'set_portfolio_style_script');


/*
=========================================
ACTIVATE MENUS (in Appearance in WP Admin)
=========================================
*/

function register_theme_menus() {
  add_theme_support('menus');
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'secondary-menu' => __('Secondary Menu')
			)
		);
}
add_action('init', 'register_theme_menus');

/*
=========================================
THEME SUPPORT FUNCTION
=========================================
*/

// enable thumbnails (featured images)
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 150, 100 );

// enable custom header – so can add image to custom header
add_theme_support('custom-header');

// enable page excerpts
add_post_type_support( 'page', 'excerpt' );

// show admin bar
add_filter('show_admin_bar', '__return_true');

add_theme_support('custom-background');

// add_theme_support('post-formats', array('aside', 'image', 'video'));

// theme support function doesn't need to be in a function or action, can be called right away in functions.php (but if building a plug-in, would have to be inside an action, called during initialization or after theme setup)


/*
=========================================
ALLOW SVG UPLOAD
=========================================
*/

function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


/*
=============================================
REMOVES WIDTH AND HEIGHT ATRRIBUTES FROM IMG
=============================================

* @param string $html
* @return string
*/

function remove_image_size_attributes( $html ) {
  return preg_replace( '/(width|height)="\d*"/', '', $html );
}

// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );

// Remove image size attributes from images added to a WordPress post
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );





/*
=========================================
NOTES
=========================================


----- Note #1: -----

This hook enqueues custom styles within this function. Comes with 5 parameters, first one required, others optional but better to use them all so we have more control over files:

1. string $handle, (Name WP uses to use the file we want to enqueue; WP automatically adds -css at end, so we don't have to)
2. mixed $src, (Where file is located. WP needs entire absolute path of WP installation, not relative path, so use WP function get_template_directory_uri() and connect with our custom string)
3. array $deps, (Dependencies that WP file has. Here we don't have any dependencies so can print an empty array)
4. mixed $ver, (Version number)
5. string $media (Media – specify whether this file has to be printed on all devices, or just on a certain resolution device. Default is 'all', to use this file on every device this file is loaded)

----- Note #2: -----

This parameter is a boolean, by default set to false, meaning JS files will be printed in the header. We want it to run in the footer (for better speed/ page load time) so must specify it is true.

------ Note #3: -----

Have to call with an action our function, and tell WP when to execute this function. add_action is a hook that gives us the ability to connect WP execution process to our custom functions. Here WP will enqueue/generate all scripts that have to be included in our theme.

Choose wp_enqueue_scripts (plural) not wp_enqueue_script (singular) and write as a string!

Also must specify where WP has to embed this script. Use another pre-made WP function wp_head(); inside header.php <head> (for stylesheet) / wp_footer(); inside footer.php (for js files).

------ Note #4: -----

register_nav_menu adds a custom menu. Requires two parameters:

1. string $location (unique name of our menu, treated as a slug so lowercase single name, e.g. 'primary')
2. string $description (description of location, to appear in WP panel to tell users what this nav is e.g. Primary Header Navigation)

*/
