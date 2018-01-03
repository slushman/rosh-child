<?php

/**
 * @package  RoshChild
 * @author   slushman
 * @license  GPL-2.0+
 * @link     https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * Load Autoloader
 */
require get_stylesheet_directory() . '/classes/class-autoloader.php';

$classes[] = 'Setup';

foreach ( $classes as $class ) {

	$class_name 	= 'RoshChild_' . $class;
	$class_obj 		= new $class_name();

	add_action( 'after_setup_theme', array( $class_obj, 'hooks' ) );

}
